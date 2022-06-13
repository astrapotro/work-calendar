<?php

use Illuminate\Support\Facades\Route;
use App\Models\Festivity;
use App\Models\Municipality;

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

Route::get('/workcalendar', function () {
    return view('home');
});
Route::get('/workcalendar/hasiera', function () {
    return view('home-eu');
});
Route::get('/workcalendar/festivos', function () {
    return view('festivities', [
        'festivities' => Festivity::all()
    ]);
});
