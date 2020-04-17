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

//Logout
Route::get('logout','LoginController@logout');

//Login
Route::get('login','LoginController@viewLogin');
Route::post('loginPost','LoginController@loginPost');

//Admin
Route::get('admin/home','AdminController@index');

//Member
Route::get('admin/member/index_member', 'AdminController@viewPelanggan');
Route::get('admin/member/tambah_pelanggan','AdminController@viewTambahPelanggan');
Route::post('admin/member', 'AdminController@tambahPelangganPost');
Route::get('admin/member/editPelanggan/{id_member}', 'AdminController@viewEditPelanggan');
Route::patch('admin/member/{id_member}', 'AdminController@editPelanggan');
Route::get('admin/delete/member{id_member}','AdminController@deletePelangganPost');

//Outlet
Route::get('admin/outlet/indexOutlet', 'AdminController@viewOutlet');
Route::get('admin/outlet/tambahOutlet','AdminController@viewtambahOutlet');
Route::post('admin/outlet', 'AdminController@tambahOutlet');
Route::get('admin/outlet/editOutlet/{id_outlet}', 'AdminController@viewEditOutlet');
Route::post('admin/outlet/{id_outlet}', 'AdminController@editOutlet');
Route::get('admin/delete/outlet{id_outlet}', 'AdminController@deleteOutlet');

//Paket
Route::get('admin/paket/indexPaket', 'AdminController@viewPaket');
Route::get('admin/paket/tambahPaket', 'AdminController@viewtambahPaket');
Route::post('admin/paket', 'AdminController@tambahPaket');
Route::get('admin/paket/editPaket/{id_paket}', 'AdminController@viewEditPaket');
Route::post('admin/paket/{id_paket}', 'AdminController@editPaket');
Route::get('admin/delete/paket{id_paket}', 'AdminController@deletePaket');

//Transaksi
Route::get('admin/transaksi/indexTransaksi', 'AdminController@viewTransaksi');
Route::get('admin/transaksi/tambahTransaksi', 'AdminController@viewtambahTransaksi');
Route::post('admin/transaksi', 'AdminController@tambahTransaksi');
Route::get('admin/transaksi/editTransaksi/{id_transaksi}', 'AdminController@viewEditTransaksi');
Route::patch('admin/transaksi/{id_transaksi}', 'AdminController@editTransaksi');
Route::get('admin/delete/transaksi{id_transaksi}', 'AdminController@deleteTransaksi');


//Kasir
Route::get('kasir/home','kasirController@index');

//Member
Route::get('kasir/member/indexPelanggan', 'kasirController@viewPelanggan');
Route::get('kasir/member/tambahPelanggan', 'kasirController@viewTambahPelanggan');
Route::post('kasir/member', 'kasirController@tambahPelangganPost');
Route::get('kasir/member/editPelanggan/{id}', 'kasirController@viewEditPelanggan');
Route::patch('kasir/member/{id}', 'kasirController@editPelanggan');
Route::delete('kasir/delete/member{id}', 'kasirController@deletePelanggan');

//Owner
Route::get('owner/home','OwnerController@index');