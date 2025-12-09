<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EnquiryController;
use App\Repositories\GalleryRepositoryInterface;

Route::get('/', function () {

    $galleryRepository = app(GalleryRepositoryInterface::class);
    $galleryItems = $galleryRepository->getAll();
    return view('welcome', compact('galleryItems'));
});

Route::post('/contact/submit', [EnquiryController::class, 'store'])->name('contact.submit');

Route::prefix('admin')->group(function () {
    Auth::routes();

    Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('gallery', GalleryController::class)->names('admin.gallery');
    Route::resource('enquiry', EnquiryController::class)->names('admin.enquiry');
    });
    //Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
});





