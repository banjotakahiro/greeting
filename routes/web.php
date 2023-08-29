<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/comments/morning', function () {
    return view('message.morning');
});

Route::get('/comments/afternoon', function () {
    return view('message.afternoon');
});

Route::get('/comments/evening', function () {
    return view('message.evening');
});

Route::get('/comments/night', function () {
    return view('message.night');
});

Route::get('/comments/freeword/{free}', function ($free) {
    return view('freeword.freeword',['freeword' => $free]);
});

Route::get('/comments/random', function () {
    $random_message = ["おはよう","こんにちは","こんばんは","おやすみ"];
    $random_number = array_rand($random_message);
    $choice_random = $random_message[$random_number];
    return view('random_message.random',['random' => $choice_random]);
});
