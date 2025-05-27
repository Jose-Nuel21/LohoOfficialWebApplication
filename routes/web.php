<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PagesController;
use App\Http\Controllers\Admin\SermonController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('sermons', [PagesController::class, 'sermons'])->name('sermons');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('/sermons', [SermonController::class, 'store'])->name('sermons.store');
    Route::put('/sermons/{id}', [SermonController::class, 'update'])->name('sermons.update');
    //Route::delete('/sermons/{id}', [SermonController::class, 'destroy'])->name('sermons.destroy');
});


