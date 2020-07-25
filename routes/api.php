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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('items')->name('items.')->group(function(){
    Route::get('/get/{record}', 'ItemController@get')->name('get');
    Route::post('/store', 'ItemController@store')->name('store');
    Route::put('/update/{item}', 'ItemController@update')->name('update');
    Route::delete('/delete/{item}', 'ItemController@delete')->name('delete');
});