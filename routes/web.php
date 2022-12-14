<?php


use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;


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


Route::get('home',[HomeController::class,'index']);

Route::get('hello/{name?}',[HelloController::class,'index'])->name('hello.index');
