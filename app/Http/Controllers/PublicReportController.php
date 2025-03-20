<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\Storage;

class PublicReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->paginate(6);
        return view('public.reports.index', compact('reports'));
    }

    public function showPdf(Report $report)
    {
        $filePath = Storage::disk('public')->path($report->pdf);
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf'
        ]);
    }
}