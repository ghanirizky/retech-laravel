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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/retech/build', 'BuildController@index')->name('build.page');
Route::get('/retech/build/pay', 'BuildController@getPayPage')->name('build.pay.page');
Route::get('/retech/simulation', 'SimulationController@index')->name('simulation.page');
Route::get('/retech/service/form', 'ServiceController@getForm')->name('service.form');
Route::get('/retech/service/detail', 'ServiceController@payment')->name('service.payment');
Route::get('/retech/service/detail/book/', 'ServiceController@bookService')->name('service.book');
Route::get('/user/service/', 'ServiceController@serviceTransaction')->name('service.transaction');


Route::get('/category/{category}/detail/{name}', 'ProductController@detail')->name('product.detail');
Route::get('/category/{category}', 'CategoryController@category')->name('category.category');
Route::get('/category/all', 'CategoryController@showall')->name('category.showall');

// Route::get('user/payment', 'ProductController@addToCart')->name('transaction.payment.page');


Route::post('user/cart/addtocart/{id}', 'ProductController@addToCart')->name('user.cart.addtocart');
Route::post('user/cart/buynow/{id}','ProductController@addToCart')->name('user.buynow');

Route::get('user/cart', 'CartController@index')->name('user.cart');
Route::get('user/cart/remove/{id}', 'CartController@removeItem' )->name('user.cart.remove');
Route::get('user/cart/edit/{id}', "CartController@editItemPage")->name('user.cart.editpage');
Route::post('user/cart/edit/{id}', 'CartController@editItem')->name('user.cart.edit');
Route::get('user/cart/checkout/user-id/{id}', 'TransactionController@getPaymentPage')->name('transaction.payment.page');
Route::post('user/cart/checkout/user-id/{id}/pay/{t_type}/{productid}/{qty}', 'TransactionController@actionPay')->name('transaction.pay');

Route::get('user/transaction/history', 'TransactionController@getHistoryPage')->name('transaction.history.page');
Route::get('user/transaction/history/detail/{transactionid}','TransactionController@getDetailPage' )->name('transaction.detail.page');