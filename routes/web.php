<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\PhotocardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/about', [SliderController::class, 'index'])->name('about');
Route::get('/teachers', [TeacherController::class,'index'])->name('teachers');
Route::get('/', [HomeSliderController::class,'index'])->name('home');
Route::get('/dars', [GroupController::class, 'index'])->name('subject');
Route::get('/photo', [VideoController::class, 'index'])->name('photo');
Route::get('/yutuqlar', [PhotocardController::class, 'index'])->name('achievements');
Route::get('/news', [NewsController::class, 'index'])->name('news');


Route::get('/aloqa', function () {
    return view('aloqa');
})->name('contact');





