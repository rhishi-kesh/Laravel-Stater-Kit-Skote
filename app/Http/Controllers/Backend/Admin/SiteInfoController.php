<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siteInfos = SiteInfo::all();
        return view('backend.layouts.siteinfos.index', compact('siteInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteInfo $siteInfo)
    {
        return view('backend.layouts.siteinfos.edit', compact('siteInfo'));
    }

    public function update(Request $request, SiteInfo $siteInfo)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'fav_icon' => 'nullable|image|mimes:png,jpg,jpeg,ico|max:2048',
            'copy_right_text' => 'required|string|max:255',
        ]);

        // Handle favicon upload
        if ($request->hasFile('fav_icon')) {
            // // Delete old favicon if it exists
            if ($siteInfo->fav_icon && Storage::exists('public/' . $siteInfo->fav_icon)) {
                Storage::delete('public/' . $siteInfo->fav_icon);
            }

            // Store new favicon
            $path = $request->file('fav_icon')->store('favicons', 'public');
            $siteInfo->fav_icon = $path;
        }

        // Update other fields
        $siteInfo->update([
            'title' => $request->title,
            'copy_right_text' => $request->copy_right_text,
            'fav_icon' => isset($path) ? $path : $siteInfo->fav_icon, // Preserve old favicon if not updated
        ]);

        return redirect()->route('site-infos.index')->with('success', 'Company info updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteInfo $siteInfo)
    {
        $siteInfo->delete();
        return redirect()->route('site-infos.index')->with('success', 'Company info deleted successfully.');
    }
}
