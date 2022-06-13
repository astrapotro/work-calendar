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

$proxy_url    = getenv('PROXY_URL');
$proxy_schema = getenv('PROXY_SCHEMA');

/*if (!empty($proxy_url)) {
   URL::forceRootUrl($proxy_url);
}

if (!empty($proxy_schema)) {
   URL::forceScheme($proxy_schema);
}*/

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
