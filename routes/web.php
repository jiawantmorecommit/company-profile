<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PublicNewsController;
use App\Http\Controllers\PublicArticleController;
use App\Http\Controllers\PublicReportController;

use App\Models\News;
use App\Models\Article;
use App\Models\Report;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile-company', function () {
    return view('profile-company');
})->name('profile-company');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('news', NewsController::class);
    Route::resource('reports', ReportController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::name('public.')->group(function () {
    Route::get('/news', [PublicNewsController::class, 'index'])->name('news.index');
    Route::get('/news/{news}', [PublicNewsController::class, 'show'])->name('news.show');
});
// Welcome Route
// Route::get('/', function () {
//     $featuredNews = News::latest()->take(3)->get();
//     return view('welcome', compact('featuredNews'));
// });

// Public Article Routes
Route::name('public.articles.')->group(function () {
    Route::get('/articles', [PublicArticleController::class, 'index'])->name('index');
    Route::get('/articles/{article}', [PublicArticleController::class, 'show'])->name('show');
});

// Public Report Routes
Route::name('public.reports.')->group(function () {
    Route::get('/reports', [PublicReportController::class, 'index'])->name('index');
    Route::get('/reports/{report}/pdf', [PublicReportController::class, 'showPdf'])
         ->name('show.pdf');
});

Route::get('/', function () {
    $featuredNews = News::latest()->take(3)->get();
    // $featuredArticles = Article::latest()->take(3)->get();
    // $featuredReports = Report::latest()->take(3)->get();
    
    return view('welcome', compact('featuredNews'));
});


require __DIR__ . '/auth.php';
