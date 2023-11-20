<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaxDataController;

use Illuminate\Support\Facades\Session;


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
     session()->forget(['payment_through', 'choosed_type','bank_name', 'tax_type','words', 'total','section', 'penalty','interest', 'cess','surcharge', 'tax','payment_type', 'financial_year','assessment_year','mobile_number','pan_number']);
    return view('index');
})->name('base');

Route::get('/part1-taxpay2', function () {
     
    session()->forget(['payment_through', 'choosed_type','bank_name', 'tax_type','words', 'total','section', 'penalty','interest', 'cess','surcharge', 'tax','payment_type', 'financial_year','assessment_year','mobile_number','pan_number']);
    return view('Part1-Taxpay2');
})->name('part1-taxpay2');

Route::get('/part1-taxpay3', function () {
    session()->forget(['payment_through', 'choosed_type','bank_name', 'tax_type','words', 'total','section', 'penalty','interest', 'cess','surcharge', 'tax','payment_type', 'financial_year','assessment_year']);
    return view('Part1-Taxpay3');
})->name('part1-taxpay3');

Route::post('/part1-taxpay3',[TaxDataController::class, 'PanUpdate'])->name('part1-taxpay3');


Route::get('/part1-taxpay4', function () {
    session()->forget(['payment_through', 'choosed_type','bank_name', 'tax_type','words', 'total','section', 'penalty','interest', 'cess','surcharge', 'tax','payment_type', 'financial_year','assessment_year']);
    $pan_number = Session::get('pan_number');

    return view('Part1-Taxpay4' , compact('pan_number'));
})->name('part1-taxpay4');

Route::get('/part1-taxpay5', function () {
    // Your logic here
    session()->forget(['payment_through', 'choosed_type','bank_name', 'tax_type','words', 'total','section', 'penalty','interest', 'cess','surcharge', 'tax','payment_type']);
    $pan_number = Session::get('pan_number');
    
    return view('Part1-Taxpay5', compact('pan_number'));
})->name('part1-taxpay5');

Route::post('/Part1-Taxpay05',[TaxDataController::class, 'yearUpdate'])->name('Part1-Taxpay05');


Route::get('/part1-taxpay6',[TaxDataController::class, 'getData'])->name('part1-taxpay6');



Route::get('/part1-taxpay7', function () {
    session()->forget(['payment_through', 'choosed_type','bank_name']);
    return view('Part1-Taxpay07');
})->name('part1-taxpay7');

Route::post('/part1-taxpay7',[TaxDataController::class, 'paymentType'])->name('part1-taxpay7');

Route::get('/Par1-TAxpay08-a', function () {
    session()->forget(['payment_through', 'choosed_type','bank_name']);
    return view('Par1-TAxpay08-a');
})->name('Par1-TAxpay08-a');

Route::post('/Par1-TAxpay08-a',[TaxDataController::class, 'amountUpdate'])->name('Par1-TAxpay08-a');

Route::get('/Part1-Taxpat8-f', function () {
    $data = Session::all();
    return view('Part1-Taxpat8-f', compact('data'));
})->name('Part1-Taxpat8-f');

Route::post('/Part1-Taxpat8-f',[TaxDataController::class, 'paymentMethod'])->name('Part1-Taxpat8-f');

Route::get('/payment-submit',[TaxDataController::class, 'paymentSubmit'])->name('payment-submit');



