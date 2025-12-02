<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EnquiryController;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->group(function () {
    Auth::routes();

 

    Route::middleware(['auth'])->group(function () {
           Route::get('/home', [HomeController::class, 'index'])->name('home');
   Route::resource('gallery', GalleryController::class)->names('admin.gallery');
    Route::resource('enquiry', EnquiryController::class)->names('admin.enquiry');
    });

 

    //Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    
});





