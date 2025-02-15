<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Amount;
use App\Models\Version;

class CardController extends Controller
{

    public function index()
    {
        $cards = Card::with('platform')->get();
        return view('backend.layouts.cards.index', compact('cards'));
    }

    public function create()
    {
        // $platforms = Platform::all();
        $platforms = Platform::all();
        $amounts = Amount::all();
        $versions = Version::all();
        return view('backend.layouts.cards.create', compact('platforms', 'amounts','versions'));
    }

    /**
     * Store a newly created card in the database.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'platform_id' => 'required|exists:platforms,id',
    //         'title' => 'required|string|max:255',
    //         'image' => 'nullable|image|mimes:png,jpg,jpeg,ico|max:2048',
    //         'seller' => 'required|string|max:255',
    //         'type' => 'required|in:voucher,gift_card',
    //         'base_price' => 'required|numeric',
    //         'discount' => 'nullable|numeric',
    //         'stock' => 'required|integer',
    //         'usage' => 'nullable|string',
    //         'description' => 'nullable|string',
    //         'delivery_time' => 'nullable|string',
    //     ]);

    //     //$card = Card::create($request->all());
    //     $card = new Card;

    //     if ($request->hasFile('image')) {
    //         // // Delete old favicon if it exists
    //         if ($card->image && Storage::exists('public/' . $card->image)) {
    //             Storage::delete('public/' . $card->image);
    //         }

    //         // Store new favicon
    //         $path = $request->file('image')->store('cards', 'public');
    //         $card->image = $path;
    //     }

    //     // Update other fields
    //     $card->create([
    //         'platform_id' => $request->platform_id,
    //         'title' => $request->title,
    //         'image' => isset($path) ? $path : $card->image,
    //         'seller' => $request->seller,
    //         'type' => $request->type,
    //         'base_price' => $request->base_price,
    //         'discount' => $request->discount,
    //         'stock' => $request->stock,
    //         'usage' => $request->usage,
    //         'description' => $request->description,
    //         'delivery_time' => $request->delivery_time,
    //                 'amounts' => 'required|array',
    //                 'amounts.*' => 'integer|exists:amounts,id',
    //     ]);

    //     return redirect()->route('cards.index')->with('success', 'Card created successfully.');
    // }


    public function store(Request $request)
    {
        $request->validate([
            'platform_id' => 'required|exists:platforms,id',
            'title' => [
                'required',
                'string',
                'unique:cards,title',
                'max:255',
                Rule::unique('cards')->where(function ($query) use ($request) {
                    return $query->whereRaw('LOWER(title) = ?', [strtolower($request->title)]);
                }),
            ],
            'image' => 'required|image|mimes:png,jpg,jpeg,ico|max:2048',
            'seller' => 'required|string|max:255',
            'type' => 'required|in:voucher,gift_card',
            'base_price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'stock' => 'required|integer',
            'usage' => 'nullable|string',
            'description' => 'nullable|string',
            'delivery_time' => 'nullable|string',
            'versions' => 'required|array',
            'versions.*' => 'string|exists:versions,id',
            'amounts' => 'required|array',
            'amounts.*' => 'integer|exists:amounts,id',
        ]);

        $card = new Card;

        if ($request->hasFile('image')) {
            if ($card->image && Storage::exists('public/' . $card->image)) {
                Storage::delete('public/' . $card->image);
            }
            $path = $request->file('image')->store('cards', 'public');
            $card->image = $path;
        }


        // Save the card with lowercase title
        $card->platform_id = $request->platform_id;
        $card->title = strtolower($request->title);
        $card->image = isset($path) ? $path : $card->image;
        $card->seller = $request->seller;
        $card->type = $request->type;
        $card->base_price = $request->base_price;
        $card->discount = $request->discount;
        $card->stock = $request->stock;
        $card->usage = $request->usage;
        $card->description = $request->description;
        $card->delivery_time = $request->delivery_time;
        $card->save();

        
        $card->amounts()->sync($request->amounts);
        $card->versions()->sync($request->versions);

        return redirect()->route('cards.index')->with('success', 'Card created successfully.');
    }


    public function show(Card $card)
    {
        $card->load('amounts');
        return view('backend.layouts.cards.show', compact('card'));
    }

    public function edit(Card $card)
    {
        // $platforms = Platform::all();
        $platforms = Platform::all();
        $amounts = Amount::all();
        return view('backend.layouts.cards.edit', compact('card', 'platforms', 'amounts'));
    }

    /**
     * Update the specified card in the database.
     */
    // public function update(Request $request, Card $card)
    // {
    //     $request->validate([
    //         'platform_id' => 'required|exists:platforms,id',
    //         'title' => 'required|string|max:255',
    //         'image' => 'nullable|image|mimes:png,jpg,jpeg,ico|max:2048',
    //         'seller' => 'required|string|max:255',
    //         'type' => 'required|in:voucher,gift_card',
    //         'base_price' => 'required|numeric',
    //         'discount' => 'nullable|numeric',
    //         'stock' => 'required|integer',
    //         'usage' => 'nullable|string',
    //         'description' => 'nullable|string',
    //         'delivery_time' => 'nullable|string',
    //     ]);

    //     // $card->update($request->all());

    //     if ($request->hasFile('image')) {
    //         // // Delete old favicon if it exists
    //         if ($card->image && Storage::exists('public/' . $card->image)) {
    //             Storage::delete('public/' . $card->image);
    //         }


    //         $path = $request->file('image')->store('cards', 'public');
    //         $card->image = $path;
    //     }

    //     // Update other fields
    //     $card->update([
    //         'platform_id' => $request->platform_id,
    //         'title' => $request->title,
    //         'image' => isset($path) ? $path : $card->image,
    //         'seller' => $request->seller,
    //         'type' => $request->type,
    //         'base_price' => $request->base_price,
    //         'discount' => $request->discount,
    //         'stock' => $request->stock,
    //         'usage' => $request->usage,
    //         'description' => $request->description,
    //         'delivery_time' => $request->delivery_time,
    //     ]);

    //     return redirect()->route('cards.index')->with('success', 'Card updated successfully.');
    // }


    public function update(Request $request, Card $card)
    {
        $request->validate([
            'platform_id' => 'required|exists:platforms,id',
            'title' => 'required|string|max:255|unique:cards,title,'.$card->id,
            'image' => 'nullable|image|mimes:png,jpg,jpeg,ico|max:2048',
            'seller' => 'required|string|max:255',
            'type' => 'required|in:voucher,gift_card',
            'base_price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'stock' => 'required|integer',
            'usage' => 'nullable|string',
            'description' => 'nullable|string',
            'delivery_time' => 'nullable|string',
            'versions' => 'array',
            'versions.*' => 'string|exists:versions,id',
            'amounts' => 'array',
            'amounts.*' => 'integer|exists:amounts,id',
        ]);

        if ($request->hasFile('image')) {
            if ($card->image && Storage::exists('public/' . $card->image)) {
                Storage::delete('public/' . $card->image);
            }
            $path = $request->file('image')->store('cards', 'public');
            $card->image = $path;
        }

        $card->update([
            'platform_id' => $request->platform_id,
            'title' => $request->title,
            'image' => isset($path) ? $path : $card->image,
            'seller' => $request->seller,
            'type' => $request->type,
            'base_price' => $request->base_price,
            'discount' => $request->discount,
            'stock' => $request->stock,
            'usage' => $request->usage,
            'description' => $request->description,
            'delivery_time' => $request->delivery_time,
        ]);

        // Update the amounts associated with the card
        $card->amounts()->sync($request->amounts);
        $card->versions()->sync($request->versions);


        return redirect()->route('cards.index')->with('success', 'Card updated successfully.');
    }






    public function destroy(Card $card)
    {
        $card->delete();

        return redirect()->route('cards.index')->with('success', 'Card deleted successfully.');
    }
}
