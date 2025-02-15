<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the platforms.
     */
    public function index()
    {
        $platforms = Platform::all();
        return view('backend.layouts.platforms.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new platform.
     */
    public function create()
    {
        return view('backend.layouts.platforms.create');
    }

    /**
     * Store a newly created platform in the database.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255|unique:platforms',
            ],
            [
                'name.required'=>'Platform name is required'
            ]
        );

        Platform::create($request->all());

        return redirect()->route('platforms.index')->with('success', 'Platform created successfully.');
    }

    /**
     * Display the specified platform.
     */
    public function show(Platform $platform)
    {
        return view('backend.layouts.platforms.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified platform.
     */
    public function edit(Platform $platform)
    {
        return view('backend.layouts.platforms.edit', compact('platform'));
    }

    /**
     * Update the specified platform in the database.
     */
    public function update(Request $request, Platform $platform)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:platforms,name,' . $platform->id,
        ]);

        $platform->update($request->all());

        return redirect()->route('platforms.index')->with('success', 'Platform updated successfully.');
    }

    /**
     * Remove the specified platform from the database.
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();

        return redirect()->route('platforms.index')->with('success', 'Platform deleted successfully.');
    }
}
