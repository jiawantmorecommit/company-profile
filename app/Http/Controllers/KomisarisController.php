<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komisaris;
use App\Models\Direksi;
use Illuminate\Support\Facades\Storage;

class KomisarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $komisaris = Komisaris::all();
        return view('admin.management.komisaris.index', compact('komisaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.management.komisaris.create');
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
        
        $komisaris = new Komisaris();
        $komisaris->name = $request->name;
        $komisaris->jabatan = $request->jabatan;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // Store image directly in public/images/komisaris directory
            $request->image->move(public_path('images/komisaris'), $imageName);
            $komisaris->image = $imageName;
        }
        
        $komisaris->description = $request->description;
        $komisaris->save();
        
        return redirect()->route('admin.management.komisaris.index')->with('success', 'Komisaris created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $komisaris = Komisaris::find($id);
        return view('admin.management.komisaris.show', compact('komisaris'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $komisaris = Komisaris::find($id);
        return view('admin.management.komisaris.edit', compact('komisaris'));
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

        $komisaris = Komisaris::find($id);
        $komisaris->name = $request->name;
        $komisaris->jabatan = $request->jabatan;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($komisaris->image && file_exists(public_path('images/komisaris/' . $komisaris->image))) {
                unlink(public_path('images/komisaris/' . $komisaris->image));
            }
            
            // Store new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/komisaris'), $imageName);
            $komisaris->image = $imageName;
        }
        
        $komisaris->description = $request->description;
        $komisaris->save();
        
        return redirect()->route('admin.management.komisaris.index')->with('success', 'Komisaris updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $komisaris = Komisaris::find($id);
        
        // Delete image file if exists
        if ($komisaris->image && file_exists(public_path('images/komisaris/' . $komisaris->image))) {
            unlink(public_path('images/komisaris/' . $komisaris->image));
        }
        
        $komisaris->delete();
        return redirect()->route('admin.management.komisaris.index')->with('success', 'Komisaris deleted successfully');
    }

    /**
     * Display company profile with komisaris and direksi data.
     */
    public function profileCompany()
    {
        $komisarisData = Komisaris::all();
        $direksiData = Direksi::all();
        
        return view('profile-company', [
            'komisarisData' => $komisarisData,
            'direksiData' => $direksiData
        ]);
    }
}
