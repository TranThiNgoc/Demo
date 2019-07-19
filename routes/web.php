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
    return view('welcome');
});
Route::get('hoclaravel',function (){
    return   "Chao mung ban den voi khoa hoc lap trih";
});
Route::get('sayhello/{stn}/{sth}',function ($stn,$sth){
    $tong=$stn+$sth;
    return $tong;
});
Route::get('Dashbroad',function (){
    return view('admin.Layout');
});
