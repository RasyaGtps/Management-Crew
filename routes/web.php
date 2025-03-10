<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/fitur', function () {
    return view('fitur');
})->name('fitur');

Route::get('/harga', function () {
    return view('harga');
})->name('harga');

Route::get('/tutorial', function () {
    return view('tutorial');
})->name('tutorial');

Route::get('/updates', function () {
    return view('updates');
})->name('updates');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/karir', function () {
    return view('karir');
})->name('karir');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/press', function () {
    return view('press');
})->name('press');

Route::get('/kebijakan-privasi', function () {
    return view('kebijakan-privasi');
})->name('kebijakan-privasi');

Route::get('/syarat-ketentuan', function () {
    return view('syarat-ketentuan');
})->name('syarat-ketentuan');

Route::get('/cookies', function () {
    return view('cookies');
})->name('cookies');

require __DIR__.'/auth.php';
