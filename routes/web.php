<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\StoreController;
// use App\Http\Controllers\MenuController;
// use App\Http\Controllers\OrderDoneController;
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
    return view('Login.login-aplikasi');
});

/* FRONT END */
Route::view('/beranda','Template.beranda');

/* FRONT END ADMIN*/
Route::view('/admin','Template.admin');
Route::view('/store-admin','Admin.store-admin');
Route::view('/food-admin','Admin.food-admin');
Route::view('/users','Admin.users');
Route::view('/order-admin','Admin.order-admin');
Route::get('/order_process', "OrderProcessController@index");
Route::get('/order_done', "OrderDoneController@index");
Route::get('/order_cancel', "OrderCancelController@index");
Route::view('/tambah_user','Admin.tambah_users');
Route::view('/edit_user','Admin.edit_users');
Route::get('/tambah_menu-admin', "MenuController@create");
Route::get('/tambah_store-admin',"StoreController@create");
Route::view('/detail_menu','Admin.detail_menu');
Route::view('/detail-order-admin','Admin.detail-order-admin');
Route::get('/edit_store-admin/{id}', "StoreController@edit");
Route::get('/payment',"PaymentController@index");
Route::get('/payment/cetak_pdf', 'PaymentController@cetak_pdf');
Route::get('/payment/export_excel', 'PaymentController@export_excel');
Route::get('/payment_search', 'PaymentController@date');

/* FRONT END SELLER*/
Route::view('/seller','Template.seller');
Route::view('/dashboard','Seller.dashboard');
Route::view('/store-seller','Seller.store-seller');
Route::view('/edit-store-seller','Seller.edit-store-seller');
Route::view('/food-seller','Seller.food-seller');
Route::view('/order-seller','Seller.order-seller');
Route::view('/order-detail','Seller.order-detail');
Route::view('/tambah_menu','Seller.tambah_menu');
Route::view('/edit_menu','Seller.edit_menu');

/* FRONT END AGENT*/
Route::view('/agent','Template.agent');
Route::view('/order-agent','Agent.order-agent');
Route::view('/detail-order','Agent.detail-order');

/* FRONT END CUSTOMER*/
Route::view('/customer','Template.customer');
Route::view('/order-food','Customer.order-food');
Route::view('/modal-food','Customer.modal-food');
Route::view('/order-cust','Customer.order-cust');
Route::view('/payment_customer','Customer.payment_customer');

/* Routes for LOGIN & REGISTER */
Route::get('/register',"LoginController@register")->name('register');
Route::post('/simpanregister',"LoginController@simpanregister")->name('simpanregister');
Route::get('/login',"LoginController@login")->name('login');
Route::post('/postlogin',"LoginController@postlogin")->name('postlogin');
Route::get('/logout',"LoginController@logout")->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,customer,agent,seller']], function(){
    Route::get('/home', "HomeController@index")->name('home');
});

Route::get('/pesan/sukses','LoginController@sukses');

Route::resource('store-admin', StoreController::class);

Route::resource('food-admin', MenuController::class);

Route::resource('users', UserController::class);

Route::resource('order-admin', OrderController::class);

Route::resource('order-done', OrderDoneController::class);

Route::resource('order-process', OrderProcessController::class);

Route::resource('order-cancel', OrderCancelController::class);

Route::resource('payment-admin', PaymentController::class);

Route::resource('food-seller', MenuSellerController::class);