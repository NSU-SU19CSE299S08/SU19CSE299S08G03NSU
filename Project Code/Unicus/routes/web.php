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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'WelcomeController@index')->name('dashboard');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/add-category', 'CategoryController@showAddCategoryForm')->name('category.add');
Route::post('/category/save-category', 'CategoryController@saveCategoryInfo')->name('category.save');
Route::get('/category/manage-category', 'CategoryController@manageCategory')->name('category.manage');
Route::get('/category/edit-category/{id}', 'CategoryController@editCategory')->name('category.edit');
Route::post('/category/update-category', 'CategoryController@updateCategory')->name('category.update');
Route::get('/category/delete-category/{id}', 'CategoryController@deleteCategory');


Route::get('/payment/add-payment', 'PaymentController@addPaymentForm')->name('payment.add');
Route::post('/payment/save-payment', 'PaymentController@savePayment')->name('payment.save');

Route::get('/product/add-product', 'ProductController@addProduct')->name('product.add');
Route::get('/product/manage-product', 'ProductController@manageProduct')->name('product.manage');
Route::get('/product/unpublished-product/{id}', 'ProductController@unpublishedProduct');
















Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
Route::Post('/admin/login/check', 'AdminController@login')->name('admin.login.submit');
Route::Post('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
