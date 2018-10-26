<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::namespace('Admin')->group(
    function () {
        Route::prefix('admin')->group(
            function () {
                Route::get('/', 'IndexController@index')->name('admin-index');
                Route::get('/soon', 'IndexController@soon')->name('admin-soon');
                Route::get('/clients', 'ClientController@index');

                Route::get('/products', 'ProductsController@index')->name('products-index');
                Route::get('/products/create', 'ProductsController@create')->name('products-form');
                Route::post('/products/store', 'ProductsController@store')->name('products-store');
                Route::get('/products/edit/{id}', 'ProductsController@edit')->name('products-edit');
                Route::post('/products/update/{id}', 'ProductsController@update')->name('products-update');
                Route::get('/products/show/{id}', 'ProductsController@show')->name('products-show');
                Route::get('/products/delete/{id}', 'ProductsController@destroy')->name('products-delete');

                Route::get('/clients', 'ClientsController@index')->name('clients-index');
                Route::get('/clients/create', 'ClientsController@create')->name('clients-form');
                Route::get('/clients/id/{id}', 'ClientsController@show')->name('clients-show');

                Route::get('/applications', 'ApplicationsController@index')->name('admin-loans-index');
                Route::get('/applications/{tracking_code}', 'ApplicationsController@show')->name('admin-loans-show');
                Route::get('/applications/{tracking_code}/edit', 'ApplicationsController@edit')->name('admin-loans-edit');
                Route::post('/applications/{tracking_code}/update', 'ApplicationsController@update')->name('admin-loans-update');
                Route::get('/applications/{tracking_code}/process/{status}', 'ApplicationsController@process')->name('admin-loans-process');
                Route::get('/applications/{tracking_code}/delete', 'ApplicationsController@delete')->name('admin-loans-delete');
            }
        );
    }
);


// Loans
Route::get('/loans/application', 'HomeController@loanIndex')->name('loans-index');
Route::get('/loans/application/{id}', 'HomeController@loanApplication')->name('loans-application');
Route::post('/loans/application/{id}', 'HomeController@loanApplicationPost')->name('loan-application-post');
Route::get('/loans/view', 'HomeController@loanView')->name('application-view');
Route::get('/loans/track', 'HomeController@loanTrack')->name('loans-track');

// Insurance
Route::get('/insurance', 'HomeController@insuranceIndex')->name('insurance-index');
Route::get('/insurance/application/{id}', 'HomeController@insuranceApplication')->name('insurance-application');
Route::post('/insurance/application/{id}', 'HomeController@insuranceApplicationPost')->name('insurance-application-post');