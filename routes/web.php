<?php

use App\Http\Controllers\mController;
use App\Http\Middleware\x;
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


Route::view('home','home');
Route::view('access','access');
Route::view('noaccess', 'noaccess');

Route::group(['middleware'=>['groupmiddleware']],function(){
    Route::get('/m', [mController::class, 'mView'])->middleware('routemiddleware');
});