<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Version;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    /**
     * Display a listing of the versions.
     */
    public function index()
    {
        $versions = Version::all();
        return view('backend.layouts.versions.index', compact('versions'));
    }

    /**
     * Show the form for creating a new version.
     */
    public function create()
    {
        return view('backend.layouts.versions.create');
    }

    /**
     * Store a newly created version in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:versions',
        ]);

        Version::create($request->all());

        return redirect()->route('versions.index')->with('success', 'Version created successfully.');
    }

    /**
     * Display the specified version.
     */
    public function show(Version $version)
    {
        return view('backend.layouts.versions.show', compact('version'));
    }

    /**
     * Show the form for editing the specified version.
     */
    public function edit(Version $version)
    {
        return view('backend.layouts.versions.edit', compact('version'));
    }

    /**
     * Update the specified version in the database.
     */
    public function update(Request $request, Version $version)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:versions,name,' . $version->id,
        ]);

        $version->update($request->all());

        return redirect()->route('versions.index')->with('success', 'Version updated successfully.');
    }

    /**
     * Remove the specified version from the database.
     */
    public function destroy(Version $version)
    {
        $version->delete();

        return redirect()->route('versions.index')->with('success', 'Version deleted successfully.');
    }
}