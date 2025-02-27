<?php

// app/Http/Controllers/ReportController.php
namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->get();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'required|mimes:pdf|max:10000',
        ]);

        $imagePath = $request->file('image')->store('reports/images', 'public');
        $pdfPath = $request->file('pdf')->store('reports/pdfs', 'public');

        Report::create([
            'title' => $request->title,
            'image' => $imagePath,
            'pdf' => $pdfPath,
        ]);

        return redirect()->route('reports.index');
    }

    public function edit($id)
    {
        // Ambil data laporan berdasarkan ID
        $report = Report::findOrFail($id);

        // Tampilkan view edit dengan data laporan
        return view('reports.edit', compact('report'));
    }

    /**
     * Memperbarui laporan yang sudah ada di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10000',
        ]);

        // Ambil data laporan berdasarkan ID
        $report = Report::findOrFail($id);

        // Update data laporan
        $report->title = $request->title;

        // Jika ada file gambar baru diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($report->image && file_exists(storage_path('app/public/' . $report->image))) {
                unlink(storage_path('app/public/' . $report->image));
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('reports/images', 'public');
            $report->image = $imagePath;
        }

        // Jika ada file PDF baru diupload
        if ($request->hasFile('pdf')) {
            // Hapus PDF lama jika ada
            if ($report->pdf && file_exists(storage_path('app/public/' . $report->pdf))) {
                unlink(storage_path('app/public/' . $report->pdf));
            }
            // Simpan PDF baru
            $pdfPath = $request->file('pdf')->store('reports/pdfs', 'public');
            $report->pdf = $pdfPath;
        }

        // Simpan perubahan ke database
        $report->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('reports.index')->with('success', 'Laporan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Ambil data laporan berdasarkan ID
        $report = Report::findOrFail($id);

        // Hapus file gambar jika ada
        if ($report->image && Storage::exists('public/' . $report->image)) {
            Storage::delete('public/' . $report->image);
        }

        // Hapus file PDF jika ada
        if ($report->pdf && Storage::exists('public/' . $report->pdf)) {
            Storage::delete('public/' . $report->pdf);
        }

        // Hapus data laporan dari database
        $report->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('reports.index')->with('success', 'Laporan berhasil dihapus!');
    }
}
