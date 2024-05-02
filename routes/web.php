<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

// ------------------------------------------------------------------------------- //
// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Classes Page
Route::get('classes', function () {
    return view('pages.classes');
})->name('classes');

// Teachers Page
Route::get('teachers', function () {
    return view('pages.teachers');
})->name('teachers');

// Gallery Page
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

// Blog page
Route::resource('blog', BlogController::class);

// Single Blog Page
Route::get('/blogs', function () {
    return view('pages.bloggrid');
})->name('bloggrid');
// ------------------------------------------------------------------------------- //




Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.create_class');
    });
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
