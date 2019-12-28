<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    
    Route::resource('users', 'UserController', [
        'only' => ['index', 'show', 'update']
    ]);
    Route::resource('accounts','AccountController');
    Route::resource('transactions','TransactionController');  
    Route::get('logout', 'UserController@logout');
    Route::post('accounts/getCuentas', 'AccountController@getAccountsByIdUser');
    Route::post('transactions/getCuentasUser', 'TransactionController@getCuentasUser');
});