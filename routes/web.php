<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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



Route::view('/beranda','Template.beranda');
Route::view('/customer','Template.customer');
Route::view('/agent','Template.agent');
Route::view('/seller','Template.seller');
Route::view('/admin','Template.admin');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/simpanregister',[LoginController::class,'simpanregister'])->name('simpanregister');
Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,customer,agent,seller']], function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
});
