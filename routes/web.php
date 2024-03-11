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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/guidelines', function() {
    return view('guidelines');
})->name('guidelines');

Route::get('/tickets', function() {
    return view('tickets');
})->name('tickets');

Route::get('/events', function() {
    return view('events');
})->name('events');

Route::get('/animals', function() {
    return view('animals');
})->name('animals');

Route::get('/plants', function() {
    return view('plants');
})->name('plants');