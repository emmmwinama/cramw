<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage'])->name('home');
Route::post('/contact', [PageController::class, 'form'])->name('contact-form');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/mandate', [PageController::class, 'mandate'])->name('mandate');
Route::get('/management', [PageController::class, 'management'])->name('management');
Route::get('/board', [PageController::class, 'board'])->name('board');
Route::get('/licenses', [PageController::class, 'licenses'])->name('licenses');
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
Route::get('/notices', [PageController::class, 'notices'])->name('notices');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/legaldocuments', [PageController::class, 'legaldocuments'])->name('legaldocuments');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/newsread/{id}', [PageController::class, 'newsread'])->name('newsread');
Route::get('/vacancies', [PageController::class, 'vacancies'])->name('vacancies');
Route::get('/vacancies-read/{id}', [PageController::class, 'vacanciesread'])->name('vacancies-read');
Route::get('staff', [PageController::class, 'staff'])->name('staff');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
