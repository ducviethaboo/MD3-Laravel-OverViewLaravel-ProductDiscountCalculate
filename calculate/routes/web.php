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

Route::get('/calculate', function () {
   return view('calculate');
});

Route::post('/show', function (Illuminate\Http\Request $request) {
    $productDesc = $request->input('desc');
    $productPrice = $request->input('price');
    $discountPercent = $request->input('discountpercent');
    $discountAmount = $productPrice * $discountPercent * 0.01;
    $discountPrice = $productPrice - $discountAmount;
    return view('show', compact(['productDesc','productPrice','discountPercent','discountAmount','discountPrice']));
});





