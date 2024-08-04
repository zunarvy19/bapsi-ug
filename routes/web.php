<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.dashboard', ['title'=>'Dashboard']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get("/dashboard", [ViewController::class, 'dashboardAdmin'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/admin/berita/halaman-buat-berita', [BeritaController::class, 'create'])->name('create');
    Route::get('/admin/berita/{berita:slug}', [BeritaController::class, 'show']);
    Route::post('/admin/berita/buat-berita', [BeritaController::class, 'store'])->name('store');
    route::get('/admin/berita/checkSlug', [BeritaController::class, 'checkSlug']);
});

Route::get('/tentang-kami', [ViewController::class, 'tentang'])->name('user.tentang');
Route::get('/struktur-bapsi', [ViewController::class, 'struktur'])->name('user.struktur');
Route::get('/staffsite', [ViewController::class, 'staffsite'])->name('user.staffsite');
Route::get('/studentsite', [ViewController::class, 'studentsite'])->name('user.studentsite');
Route::get('/helpdesk', [ViewController::class, 'helpdesk'])->name('user.helpdesk');
Route::get('/download', [ViewController::class, 'download'])->name('user.download');
Route::get('/sop', [ViewController::class, 'sop'])->name('user.sop');
Route::get('/fasilitas-tik', [ViewController::class, 'fasilitas'])->name('user.fasilitas');
Route::get('/infrastruktur-tik', [ViewController::class, 'infrastruktur'])->name('user.infrastruktur');
Route::get('/berita', [BeritaController::class, 'berita'])->name('user.berita');
Route::get('/ug-on-the-press', [ArtikelController::class, 'artikel'])->name('user.artikel');

require __DIR__.'/auth.php';
