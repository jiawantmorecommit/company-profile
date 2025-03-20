<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PublicNewsController;
use App\Http\Controllers\PublicArticleController;
use App\Http\Controllers\PublicReportController;
use App\Http\Controllers\DireksiController;
use App\Http\Controllers\KomisarisController;

use App\Models\News;
use App\Models\Article;
use App\Models\Report;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile-company', [KomisarisController::class, 'profileCompany'])->name('profile-company');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('articles', ArticleController::class); 
    Route::resource('news', NewsController::class);
    Route::resource('reports', ReportController::class);
    
    // Add management prefix to the routes
    Route::prefix('management')->name('management.')->group(function () {
        Route::resource('direksi', DireksiController::class);
        Route::resource('komisaris', KomisarisController::class);
    });
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

// Public Information Routes
Route::get('/informasi/umum', [App\Http\Controllers\PublicController::class, 'informasiUmum'])->name('informasi.umum');
Route::get('/informasi/tata-kelola', [App\Http\Controllers\PublicController::class, 'informasiTataKelola'])->name('informasi.tata-kelola');
Route::get('/informasi/nasabah', [App\Http\Controllers\PublicController::class, 'informasiNasabah'])->name('informasi.nasabah');
Route::get('/informasi/download/{type}/{id}', [App\Http\Controllers\PublicController::class, 'downloadPdf'])->name('informasi.download');

// Admin Information Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Information categories with resource-style controller methods
    Route::prefix('informasi')->name('informasi.')->controller(App\Http\Controllers\Admin\InformationController::class)->group(function () {
        // Umum
        Route::get('/umum', 'indexUmum')->name('umum.index');
        Route::get('/umum/create', 'create')->name('umum.create')->defaults('type', 'umum');
        Route::post('/umum', 'store')->name('umum.store')->defaults('type', 'umum');
        Route::get('/umum/{id}/edit', 'edit')->name('umum.edit')->defaults('type', 'umum');
        Route::put('/umum/{id}', 'update')->name('umum.update')->defaults('type', 'umum');
        Route::delete('/umum/{id}', 'destroy')->name('umum.destroy')->defaults('type', 'umum');
        
        // Tata Kelola
        Route::get('/tata-kelola', 'indexTataKelola')->name('tata-kelola.index');
        Route::get('/tata-kelola/create', 'create')->name('tata-kelola.create')->defaults('type', 'tata-kelola');
        Route::post('/tata-kelola', 'store')->name('tata-kelola.store')->defaults('type', 'tata-kelola');
        Route::get('/tata-kelola/{id}/edit', 'edit')->name('tata-kelola.edit')->defaults('type', 'tata-kelola');
        Route::put('/tata-kelola/{id}', 'update')->name('tata-kelola.update')->defaults('type', 'tata-kelola');
        Route::delete('/tata-kelola/{id}', 'destroy')->name('tata-kelola.destroy')->defaults('type', 'tata-kelola');
        
        // Nasabah
        Route::get('/nasabah', 'indexNasabah')->name('nasabah.index');
        Route::get('/nasabah/create', 'create')->name('nasabah.create')->defaults('type', 'nasabah');
        Route::post('/nasabah', 'store')->name('nasabah.store')->defaults('type', 'nasabah');
        Route::get('/nasabah/{id}/edit', 'edit')->name('nasabah.edit')->defaults('type', 'nasabah');
        Route::put('/nasabah/{id}', 'update')->name('nasabah.update')->defaults('type', 'nasabah');
        Route::delete('/nasabah/{id}', 'destroy')->name('nasabah.destroy')->defaults('type', 'nasabah');
    });
});



require __DIR__ . '/auth.php';
