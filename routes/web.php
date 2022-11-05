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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace'=> 'App\Http\Controllers'], function()
{ 
    /*** Home Routes
     */

    Route::get('/', 'ProductController@index')->name('home.index');

    // Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware'=> ['guest']], function() {
         /**
          * Register Routes
         */
           Route::get('/register', 'RegisterController@show')->name('register.show');
           Route::post('/register', 'RegisterController@register')->name('register.perform');
          /**
           * Login Routes
           */
          Route::get('/login', 'LoginController@show')->name('login.show');
          Route::post('/login', 'LoginController@login')->name('login.perform');
        });

        Route::group(['middleware'=> ['auth']], function() {
            /**
             * Logout Routes
             */
            Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
            // Route::get('/cart', 'ProductController@cart')->name('cart');
            Route::get('/cart', 'CartController@cart')->name('cart');
            Route::get('/add-to-cart/{productCode}', 'CartController@addToCart')->name('add.to.cart');
            Route::delete('/remove-from-cart/{productCode}','CartController@remove')->name('remove from cart');

        });


    });