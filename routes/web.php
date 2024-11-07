<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('/writers', function(){
    return view('writers');
});

Route::get('/popular',function(){
    return view('popular');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/category/SoftwareEngineering', function () {
    return view('course.SoftwareEngineering');
});

Route::get('/category/InteractiveMultimedia', function () {
    return view('course.InteractiveMultimedia');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('register', [RegisterController::class, 'showRegistrationForm']);
Route::post('register', [RegisterController::class, 'register']);