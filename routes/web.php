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
    return view('index');
});

Route::get('/part1-taxpay2', function () {
    // Your logic here
    return view('Part1-Taxpay2');
})->name('part1-taxpay2');

Route::get('/part1-taxpay3', function () {
    // Your logic here
    return view('Part1-Taxpay3');
})->name('part1-taxpay3');

Route::get('/part1-taxpay4', function () {
    // Your logic here
    return view('Part1-Taxpay4');
})->name('part1-taxpay4');

Route::get('/part1-taxpay5', function () {
    // Your logic here
    return view('Part1-Taxpay5');
})->name('part1-taxpay5');
Route::get('/part1-taxpay6', function () {
    // Your logic here
    return view('Part1-Taxpay06');
})->name('part1-taxpay6');
