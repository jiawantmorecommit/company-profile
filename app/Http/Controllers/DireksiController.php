<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direksi;
use Illuminate\Support\Facades\Storage;

class DireksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direksi = Direksi::all();
        return view('admin.management.direksi.index', compact('direksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.management.direksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        
        $direksi = new Direksi();
        $direksi->name = $request->name;
        $direksi->jabatan = $request->jabatan;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // Store image directly in public/images/direksi directory
            $request->image->move(public_path('images/direksi'), $imageName);
            $direksi->image = $imageName;
        }
        
        $direksi->description = $request->description;
        $direksi->save();
        
        return redirect()->route('admin.management.direksi.index')->with('success', 'Direksi created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $direksi = Direksi::find($id);
        return view('admin.management.direksi.show', compact('direksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $direksi = Direksi::find($id);
        return view('admin.management.direksi.edit', compact('direksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $direksi = Direksi::find($id);
        $direksi->name = $request->name;
        $direksi->jabatan = $request->jabatan;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($direksi->image && file_exists(public_path('images/direksi/' . $direksi->image))) {
                unlink(public_path('images/direksi/' . $direksi->image));
            }
            
            // Store new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/direksi'), $imageName);
            $direksi->image = $imageName;
        }
        
        $direksi->description = $request->description;
        $direksi->save();
        
        return redirect()->route('admin.management.direksi.index')->with('success', 'Direksi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $direksi = Direksi::find($id);
        
        // Delete image file if exists
        if ($direksi->image && file_exists(public_path('images/direksi/' . $direksi->image))) {
            unlink(public_path('images/direksi/' . $direksi->image));
        }
        
        $direksi->delete();
        return redirect()->route('admin.management.direksi.index')->with('success', 'Direksi deleted successfully');
    }
}
