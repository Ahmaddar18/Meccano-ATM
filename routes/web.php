<?php

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
    return view('index');
});

Route::get('/insert-card',function(){
    return view('insert-card');
});

Route::get('/insert-cardN',function(){
    return view('insert-cardN');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/homeN',function(){
    return view('homeN');
});
Route::get('/pay-bill-service',function(){
    return view('pay-bill-service');
});
Route::get('/pay-bill-serviceN',function(){
    return view('pay-bill-serviceN');
});
Route::get('/is-registered',function(){
    return view('is-registered');
});
Route::get('/is-registeredN',function(){
    return view('is-registeredN');
});
Route::get('/pay-bill',function(){
    return view('pay-bill');
});
Route::get('/pay-billN',function(){
    return view('pay-billN');
});
Route::get('/register-bill',function(){
    return view('register-bill');
});
Route::get('/register-billN',function(){
    return view('register-billN');
});
Route::get('/bill-paid',function(){
    return view('bill-paid');
});
Route::get('/bill-paidN',function(){
    return view('bill-paidN');
});
Route::get('/enter-pin',function(){
    return view('enter-pin');
});
Route::get('/enter-pinN',function(){
    return view('enter-pinN');
});
Route::get('/custom-amount',function(){
    return view('custom-amount');
});
Route::get('/custom-amountN',function(){
    return view('custom-amountN');
});
Route::get('/withdraw-cash',function(){
    return view('withdraw-cash');
});
Route::get('/withdraw-cashN',function(){
    return view('withdraw-cashN');
});