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

/// frontend routes..........
Route::get('/','HomeController@index');

/// Show category wise product here....
Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/view_item/{item_id}','HomeController@items_details_by_id');
/// Search function
Route::get('/search','HomeController@search');

/// Carts routes are................................
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart');

/// checkout  routes.............................
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');
Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');

/// payment routes....................
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');
Route::post('/bikash-payment','CheckoutController@bikash_payment');



/// order...................
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');

/// review
Route::post('/add-review','CheckoutController@add_review');
Route::get('/404','CheckoutController@four');










/// backend routes....
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');

/// Category routes......
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');
Route::get('/active-category/{category_id}','CategoryController@active_category');

Route::get('/edit-category/{category_id}','CategoryController@edit_category');

Route::post('/update-category/{category_id}','CategoryController@update_category');

Route::get('/delete-category/{category_id}','CategoryController@delete_category');
/// New Items Routes.........
Route::get('/add-new-item','NewItemController@index');
Route::post('/save-new-item','NewItemController@save_new_item');
Route::get('/all-new-item','NewItemController@all_new_item');

Route::get('/unactive-new-item/{new_item_id}','NewItemController@unactive_new_item');
Route::get('/active-new-item/{new_item_id}','NewItemController@active_new_item');
Route::get('/edit-new-item/{new_item_id}','NewItemController@edit_new_item');
Route::get('/delete-new-item/{new_item_id}','NewItemController@delete_new_item');
Route::post('/update-new-item/{new_item_id}','NewItemController@update_new_item');
/// ITEMS routes................
Route::get('/add-item','ItemController@index');
Route::post('/save-item','ItemController@save_item');
Route::get('/all-item','ItemController@all_item');

Route::get('/unactive-item/{item_id}','ItemController@unactive_item');
Route::get('/active-item/{item_id}','ItemController@active_item');
Route::get('/delete-item/{item_id}','ItemController@delete_item');
Route::get('/edit-item/{item_id}','ItemController@edit_item');
Route::post('/update-item/{item_id}','ItemController@update_item');

/// payment in dashboard

Route::get('/payment_dashboard','CheckoutController@payment_dashboard');
Route::get('/bkash_payment_dashborad','CheckoutController@bkash_payment_dashborad');

/// active unactive order
Route::get('/active-order/{order_id}','ItemController@active_order');
/// active unactive payment
Route::get('/unactive-order/{order_id}','ItemController@unactive_order');
/// active unactive bkash
Route::get('/delete-order/{order_id}','ItemController@delete_order');
/// active & unactive-payment
Route::get('/active-payment/{payment_id}','ItemController@active_payment');
Route::get('/unactive-payment/{payment_id}','ItemController@unactive_payment');
