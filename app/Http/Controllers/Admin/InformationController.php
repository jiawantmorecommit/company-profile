<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformationUmum;
use App\Models\InformationTataKelola;
use App\Models\InformationNasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InformationController extends Controller
{
    /**
     * Display a listing of general information.
     */
    public function indexUmum()
    {
        $informations = InformationUmum::latest()->paginate(10);
        return view('admin.informasi.umum.index', compact('informations'));
    }

    /**
     * Display a listing of governance information.
     */
    public function indexTataKelola()
    {
        $informations = InformationTataKelola::latest()->paginate(10);
        return view('admin.informasi.tata-kelola.index', compact('informations'));
    }

    /**
     * Display a listing of customer information.
     */
    public function indexNasabah()
    {
        $informations = InformationNasabah::latest()->paginate(10);
        return view('admin.informasi.nasabah.index', compact('informations'));
    }

    /**
     * Show the form for creating a new information item.
     */
    public function create($type)
    {
        return view('admin.informasi.' . $type . '.create');
    }

    /**
     * Store a newly created information item in storage.
     */
    public function store(Request $request)
    {
        $type = $request->route()->defaults['type'] ?? $request->input('type');
        
        if (!$type) {
            \Log::error('Type parameter missing in store method');
            abort(400, 'Type parameter is required');
        }
        
        \Log::info('Store method called', [
            'type' => $type,
            'has_pdf' => $request->hasFile('pdf'),
        ]);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'pdf' => 'nullable|mimes:pdf|max:10240',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            // Set default image with correct path
            'images' => 'informasi/images/information.png',
        ];

        // Handle PDF upload
        if ($request->hasFile('pdf')) {
            try {
                // Upload new PDF with automatic naming
                $pdfPath = $request->file('pdf')->store('informasi/pdfs', 'public');
                $data['pdf'] = $pdfPath;
                
                \Log::info('PDF uploaded successfully', ['path' => $pdfPath]);
            } catch (\Exception $e) {
                \Log::error('PDF upload failed', ['error' => $e->getMessage()]);
                return redirect()->back()->with('error', 'Failed to upload PDF: ' . $e->getMessage())->withInput();
            }
        }

        try {
            // Store based on information type
            switch ($type) {
                case 'umum':
                    InformationUmum::create($data);
                    break;
                case 'tata-kelola':
                    InformationTataKelola::create($data);
                    break;
                case 'nasabah':
                    InformationNasabah::create($data);
                    break;
                default:
                    \Log::error('Invalid type for store', ['type' => $type]);
                    abort(404, 'Invalid information type');
            }
            
            \Log::info('Information created successfully', ['type' => $type, 'data' => $data]);
        } catch (\Exception $e) {
            \Log::error('Failed to create information: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create information: ' . $e->getMessage())->withInput();
        }

        return redirect()->route('admin.informasi.' . $type . '.index')
            ->with('success', 'Information created successfully.');
    }

    /**
     * Show the form for editing the specified information item.
     */
    public function edit(Request $request, $id)
    {
        \Log::info('Edit method called', [
            'id' => $id,
            'route_params' => $request->route()->parameters(),
            'request_all' => $request->all()
        ]);
        
        // Explicitly get type from route defaults
        $type = $request->route()->defaults['type'] ?? $request->input('type');
        
        if (!$type) {
            \Log::error('Type parameter missing in edit method');
            abort(400, 'Type parameter is required');
        }
        
        \Log::info('Type value in edit', ['type' => $type]);
        
        switch ($type) {
            case 'umum':
                $information = InformationUmum::findOrFail($id);
                break;
            case 'tata-kelola':
                $information = InformationTataKelola::findOrFail($id);
                break;
            case 'nasabah':
                $information = InformationNasabah::findOrFail($id);
                break;
            default:
                \Log::error('Invalid type for edit', ['type' => $type]);
                abort(404, 'Invalid information type');
        }

        return view('admin.informasi.' . $type . '.edit', compact('information', 'type'));
    }

    /**
     * Update the specified information item in storage.
     */
    public function update(Request $request, $id)
    {
        \Log::info('Update method called', [
            'id' => $id,
            'route_params' => $request->route()->parameters(),
            'request_all' => $request->all()
        ]);
        
        // Explicitly get type from route defaults
        $type = $request->route()->defaults['type'] ?? $request->input('type');
        
        if (!$type) {
            \Log::error('Type parameter missing in update method');
            abort(400, 'Type parameter is required');
        }
        
        \Log::info('Type value for update', ['type' => $type]);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10240',
            'type' => 'sometimes|string|in:umum,tata-kelola,nasabah',
        ]);

        // Get the model based on type
        switch ($type) {
            case 'umum':
                $information = InformationUmum::findOrFail($id);
                break;
            case 'tata-kelola':
                $information = InformationTataKelola::findOrFail($id);
                break;
            case 'nasabah':
                $information = InformationNasabah::findOrFail($id);
                break;
            default:
                \Log::error('Invalid type for update', ['type' => $type]);
                abort(404, 'Invalid information type');
        }

        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        // Handle image upload
        if ($request->hasFile('images')) {
            try {
                // Delete old image if it exists
                if ($information->images && Storage::exists('public/' . $information->images)) {
                    Storage::delete('public/' . $information->images);
                }
                
                // Upload new image with automatic naming
                $imagePath = $request->file('images')->store('informasi/images', 'public');
                $data['images'] = $imagePath;
                
                \Log::info('Image uploaded successfully', ['path' => $imagePath]);
            } catch (\Exception $e) {
                \Log::error('Image upload failed', ['error' => $e->getMessage()]);
                return redirect()->back()->with('error', 'Failed to upload image: ' . $e->getMessage())->withInput();
            }
        }

        // Handle PDF upload
        if ($request->hasFile('pdf')) {
            try {
                // Delete old PDF if it exists
                if ($information->pdf && Storage::exists('public/' . $information->pdf)) {
                    Storage::delete('public/' . $information->pdf);
                }
                
                // Upload new PDF with automatic naming
                $pdfPath = $request->file('pdf')->store('informasi/pdfs', 'public');
                $data['pdf'] = $pdfPath;
                
                \Log::info('PDF uploaded successfully', ['path' => $pdfPath]);
            } catch (\Exception $e) {
                \Log::error('PDF upload failed', ['error' => $e->getMessage()]);
                return redirect()->back()->with('error', 'Failed to upload PDF: ' . $e->getMessage())->withInput();
            }
        }

        // Update the information
        try {
            $information->update($data);
            \Log::info('Information updated successfully', ['id' => $id, 'type' => $type]);
        } catch (\Exception $e) {
            \Log::error('Information update failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to update information: ' . $e->getMessage());
        }

        return redirect()->route('admin.informasi.' . $type . '.index')
            ->with('success', 'Information updated successfully.');
    }

    /**
     * Remove the specified information item from storage.
     */
    public function destroy(Request $request, $id)
    {
        \Log::info('Destroy method called', [
            'id' => $id,
            'route_params' => $request->route()->parameters(),
            'request_all' => $request->all()
        ]);
        
        // Explicitly get type from route defaults
        $type = $request->route()->defaults['type'] ?? $request->input('type');
        
        if (!$type) {
            \Log::error('Type parameter missing in destroy method');
            abort(400, 'Type parameter is required');
        }
        
        \Log::info('Type value for destroy', ['type' => $type]);
        
        // Get the model based on type
        switch ($type) {
            case 'umum':
                $information = InformationUmum::findOrFail($id);
                break;
            case 'tata-kelola':
                $information = InformationTataKelola::findOrFail($id);
                break;
            case 'nasabah':
                $information = InformationNasabah::findOrFail($id);
                break;
            default:
                \Log::error('Invalid type for destroy', ['type' => $type]);
                abort(404, 'Invalid information type');
        }

        try {
            // Delete associated files
            if ($information->images && Storage::exists('public/' . $information->images)) {
                Storage::delete('public/' . $information->images);
                \Log::info('Deleted image file', ['path' => $information->images]);
            }
            
            if ($information->pdf && Storage::exists('public/' . $information->pdf)) {
                Storage::delete('public/' . $information->pdf);
                \Log::info('Deleted PDF file', ['path' => $information->pdf]);
            }

            // Delete the information
            $information->delete();
            \Log::info('Information deleted successfully', ['id' => $id, 'type' => $type]);
        } catch (\Exception $e) {
            \Log::error('Information deletion failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to delete information: ' . $e->getMessage());
        }

        return redirect()->route('admin.informasi.' . $type . '.index')
            ->with('success', 'Information deleted successfully.');
    }
}
