<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $message = 'Hello world!';
    $sub_title = 'Francesco Alquati';

    return view('home', compact('message','sub_title'));
})->name('homepage');

Route::get('/about-us', function () {
    return view('about_us');
})->name('aboutus');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
