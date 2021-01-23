<?php

use Illuminate\Support\Facades\Date;
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
    $yearBase = 2018;
    $yearsExperiencie = date('Y') - $yearBase;
    return view('index', ["title" => "Inicio", "experience" => $yearsExperiencie]);
});


Route::get("locale/{locale}",function($locale){
    \Session::put("locale",$locale);
    return redirect()->back();
});
