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
    return view('welcome');
});

Route::get('/', function () {                         return view('homepage');                       });


Route::get('/autorijlessen', function () {                         return view('auto');                       });

Route::get('/motorrijlessen', function () {                         return view('motor');                       });

Route::get('/tarieven', function () {                         return view('prijs');                       });

Route::get('/contact', function () {                         return view('contact');                       });
