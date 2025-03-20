<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->get();
        return view('admin.reports.index', compact('reports'));
    }

    public function create()
    {
        return view('admin.reports.create');
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

        return redirect()->route('admin.reports.index');
    }

    public function edit($id)
    {
        $report = Report::findOrFail($id);
        return view('admin.reports.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10000',
        ]);

        $report = Report::findOrFail($id);
        $report->title = $request->title;

        if ($request->hasFile('image')) {
            if ($report->image && file_exists(storage_path('app/public/' . $report->image))) {
                unlink(storage_path('app/public/' . $report->image));
            }
            $imagePath = $request->file('image')->store('reports/images', 'public');
            $report->image = $imagePath;
        }

        if ($request->hasFile('pdf')) {
            if ($report->pdf && file_exists(storage_path('app/public/' . $report->pdf))) {
                unlink(storage_path('app/public/' . $report->pdf));
            }
            $pdfPath = $request->file('pdf')->store('reports/pdfs', 'public');
            $report->pdf = $pdfPath;
        }

        $report->save();

        return redirect()->route('admin.reports.index')->with('success', 'Laporan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $report = Report::findOrFail($id);

        if ($report->image && Storage::exists('public/' . $report->image)) {
            Storage::delete('public/' . $report->image);
        }

        if ($report->pdf && Storage::exists('public/' . $report->pdf)) {
            Storage::delete('public/' . $report->pdf);
        }

        $report->delete();

        return redirect()->route('admin.reports.index')->with('success', 'Laporan berhasil dihapus!');
    }
}