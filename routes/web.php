<?php

use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingController::class, 'index'])->name('landing');

Route::get('/berita',[BeritaController::class, 'index'])->name('berita.index');
Route::get('/pengumuman',[BeritaController::class, 'pengumuman'])->name('berita.pengumuman');
Route::get('/agenda',[BeritaController::class, 'agenda'])->name('berita.agenda');

Route::get('/berita/{id}',[BeritaController::class, 'show'])->name('berita.view');

// Route::get('/admin', function () {
//     return view('admin.index');
// })->name('admin.index');

Route::get('/admin',[AdminPesanController::class, 'index'])->name('admin.index');
Route::get('/admin/read',[AdminPesanController::class, 'read'])->name('admin.read');

Route::patch('/admin/{id}',[AdminPesanController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id}',[AdminPesanController::class, 'destroy'])->name('admin.destroy');

Route::get('/admin/berita',[AdminBeritaController::class, 'index'])->name('admin.berita.index');
Route::get('/admin/berita',[AdminBeritaController::class, 'index'])->name('admin.berita.index');
Route::get('/admin/berita/create}',[AdminBeritaController::class, 'create'])->name('admin.berita.add');


Route::get('/admin/berita/create',[AdminBeritaController::class, 'create'])->name('admin.berita.create');
Route::post('/admin/berita',[AdminBeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/{id}',[AdminBeritaController::class, 'show'])->name('admin.berita.show');
Route::delete('/admin/berita/{id}',[AdminBeritaController::class, 'delete'])->name('admin.berita.delete');

Route::get('/produk/{id}',[ProdukController::class, 'show'])->name('produk.show');
Route::get('/produk',[ProdukController::class, 'index'])->name('produk.index');

Route::get('/admin/pengumuman',[AdminBeritaController::class, 'pengumuman'])->name('admin.pengumuman');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
