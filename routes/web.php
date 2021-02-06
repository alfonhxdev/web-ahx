<?php

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PluginController;

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


Route::get('principal', function () {
    $yearBase = 2018;
    $yearsExperiencie = date('Y') - $yearBase;
    $plugin = new PluginController();
    return view('index', [
        "title" => "Inicio",
        "experience" => $yearsExperiencie,
        "colorTheme" => $plugin->getColorTheme(),
        "typeTheme" => $plugin->getTypeTheme(),
    ]);
});


Route::get("locale/{locale}", function ($locale) {
    \Session::put("locale", $locale);
    return redirect()->back();
});

Route::get("/", function () {
    return \Redirect::to("principal");
});


Route::get("/portfolio/{id}", function ($id) {
});
