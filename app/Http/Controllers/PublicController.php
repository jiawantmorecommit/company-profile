<?php

namespace App\Http\Controllers;

use App\Models\InformationUmum;
use App\Models\InformationTataKelola;
use App\Models\InformationNasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicController extends Controller
{
    /**
     * Display general information page.
     */
    public function informasiUmum()
    {
        $informations = InformationUmum::latest()->get();
        return view('informasi.informasi-umum', compact('informations'));
    }

    /**
     * Display governance information page.
     */
    public function informasiTataKelola()
    {
        $informations = InformationTataKelola::latest()->get();
        return view('informasi.informasi-tata-kelola', compact('informations'));
    }

    /**
     * Display customer information page.
     */
    public function informasiNasabah()
    {
        $informations = InformationNasabah::latest()->get();
        return view('informasi.informasi-nasabah', compact('informations'));
    }

    /**
     * Open PDF file in a new tab (inline view).
     */
    public function downloadPdf($type, $id)
    {
        try {
            \Log::info('Open PDF request', [
                'type' => $type,
                'id' => $id
            ]);

            // Determine the model based on the type
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
                    \Log::error('Invalid information type', ['type' => $type]);
                    abort(404, 'Invalid information type');
            }

            // Check if the PDF file exists in the database record
            if (!$information->pdf) {
                \Log::error('PDF not found in database record', ['type' => $type, 'id' => $id]);
                abort(404, 'PDF file not found');
            }

            // Check if the file exists in the storage
            if (!Storage::disk('public')->exists($information->pdf)) {
                \Log::error('PDF file does not exist in storage', [
                    'path' => $information->pdf,
                    'full_path' => Storage::disk('public')->path($information->pdf)
                ]);
                abort(404, 'PDF file does not exist in storage');
            }

            \Log::info('PDF file found, preparing inline display', ['path' => $information->pdf]);

            // Get the full path to the file
            $filePath = Storage::disk('public')->path($information->pdf);

            // Return the file as an inline response
            return response()->file($filePath, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"'
            ]);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            \Log::error('Information record not found', ['type' => $type, 'id' => $id, 'error' => $e->getMessage()]);
            abort(404, 'Information not found');
        } catch (\Exception $e) {
            \Log::error('PDF open error', [
                'type' => $type,
                'id' => $id,
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            abort(404, 'The requested file could not be opened');
        }
    }
}