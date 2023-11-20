<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'facebookPages']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('temp', function () {
    dd(get_page_info([
        'https://www.facebook.com/AcdcDanmark',
        'https://www.facebook.com/acdc',
        'https://www.facebook.com/ACDCgaleon',
        'https://www.facebook.com/thunderstruckus',
    ]));
});
