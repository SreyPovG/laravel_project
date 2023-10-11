<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('front',function(){
    return view('front_agency');
});

Route::get('master',function(){
    return view('front_master');
});

Route::get('about',function(){
    return view('front_about');
});

Route::get('/',[PostController::class,'index'])->name('front.home');
Route::get('/about',[PostController::class,'about'])->name('front.about');
Route::get('/service',[PostController::class,'service'])->name('front.service');
Route::get('/package',[PostController::class,'package'])->name('front.package');
Route::get('/distination',[PostController::class,'distination'])->name('front.distination');
Route::get('/booking',[PostController::class,'booking'])->name('front.booking');
Route::get('/team',[PostController::class,'team'])->name('front.team');
Route::get('/testimonial',[PostController::class,'testimonial'])->name('front.testimonial');
