<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;

use App\Models\Amount;
use Illuminate\Http\Request;

class AmountController extends Controller
{
    /**
     * Display a listing of the amounts.
     */
    public function index()
    {
        $amounts = Amount::all();
        return view('backend.layouts.amounts.index', compact('amounts'));
    }

    /**
     * Show the form for creating a new amount.
     */
    public function create()
    {
        return view('backend.layouts.amounts.create');
    }

    /**
     * Store a newly created amount in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'value' => 'required|integer|unique:amounts',
        ]);

        Amount::create($request->all());

        return redirect()->route('amounts.index')->with('success', 'Amount created successfully.');
    }

    /**
     * Display the specified amount.
     */
    public function show(Amount $amount)
    {
        return view('backend.layouts.amounts.show', compact('amount'));
    }

    /**
     * Show the form for editing the specified amount.
     */
    public function edit(Amount $amount)
    {
        return view('backend.layouts.amounts.edit', compact('amount'));
    }

    /**
     * Update the specified amount in the database.
     */
    public function update(Request $request, Amount $amount)
    {
        $request->validate([
            'value' => 'required|integer|unique:amounts,value,' . $amount->id,
        ]);

        $amount->update($request->all());

        return redirect()->route('amounts.index')->with('success', 'Amount updated successfully.');
    }

    /**
     * Remove the specified amount from the database.
     */
    public function destroy(Amount $amount)
    {
        $amount->delete();

        return redirect()->route('amounts.index')->with('success', 'Amount deleted successfully.');
    }
}