<?php

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

Route::get('about', 'SiteController@index')->name('about');

Route::get('/product',"ProductController@index");
Route::get('/product/type/{id}','ProductController@findType');
Route::get('/product/details/{id}','ProductController@details');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){
    return redirect('/product');
});

Auth::routes();

Route::middleware(['auth','verifyIsAdmin'])->group(function(){
//type product
Route::get('admin/createType', 'Admin\TypeController@index')->name('TypeForm');
Route::post('admin/createType', 'Admin\TypeController@store');
Route::get('admin/editType/{id}', 'Admin\TypeController@edit');
Route::post('admin/updateType/{id}', 'Admin\TypeController@update');
Route::get('admin/deleteType/{id}', 'Admin\TypeController@delete');  
 
//product
Route::get('admin/createProduct', 'Admin\ProductController@create')->name('ProductForm');
Route::post('admin/createProduct', 'Admin\ProductController@store');
Route::get('admin/ProductHome', 'Admin\ProductController@index')->name('ProductHome');
Route::get('admin/editproduct/{id}', 'Admin\ProductController@edit');
Route::get('admin/editproductimage/{id}', 'Admin\ProductController@editimage');
Route::post('admin/updateProduct/{id}', 'Admin\ProductController@update');
Route::post('admin/updateproductimage/{id}', 'Admin\ProductController@updateimage');
Route::get('admin/deleteProduct/{id}', 'Admin\ProductController@delete');

//user
Route::get('admin/UserHome', 'Admin\UserController@index')->name('UserHome');
Route::get('admin/detailuser/{id}', 'Admin\UserController@detail');
Route::get('admin/UserForm', 'Admin\UserController@create');
Route::post('admin/createUser', 'Admin\UserController@store');
Route::get('admin/EditUser/{id}', 'Admin\UserController@edit');
Route::post('admin/updateUser/{id}', 'Admin\UserController@update');
Route::get('admin/deleteUser/{id}', 'Admin\UserController@destroy');
});

Route::get('/product/priceRange','ProductController@searchProductPrice');
Route::get('/product/search','ProductController@searchProduct');



