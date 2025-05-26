<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::post('/accept-cookie', function () {
    Cookie::queue('cookie_accepted', 'yes', 60 * 24 * 30); // 30 يوم
    return response()->json(['status' => 'accepted']);
})->name('cookie.accept');

