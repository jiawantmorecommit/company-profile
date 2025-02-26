<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file'  => 'required|mimes:pdf|max:10000',
        ]);

        $imagePath = $request->file('image')->store('public/images/reports');
        $filePath  = $request->file('file')->store('public/files/reports');

        Report::create([
            'title'     => $request->title,
            'image'     => str_replace('public/', '', $imagePath),
            'file'      => str_replace('public/', '', $filePath),
            'publisher' => $request->publisher,
        ]);

        return redirect()->route('reports.index');
    }

    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file'  => 'nullable|mimes:pdf|max:10000',
        ]);

        $data = $request->only('title');

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $report->image);
            $imagePath = $request->file('image')->store('public/images/reports');
            $data['image'] = str_replace('public/', '', $imagePath);
        }

        if ($request->hasFile('file')) {
            Storage::delete('public/' . $report->file);
            $filePath = $request->file('file')->store('public/files/reports');
            $data['file'] = str_replace('public/', '', $filePath);
        }

        $report->update($data);

        return redirect()->route('reports.index');
    }

    public function destroy(Report $report)
    {
        Storage::delete(['public/' . $report->image, 'public/' . $report->file]);
        $report->delete();
        return redirect()->route('reports.index');
    }
}
