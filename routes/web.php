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

/**
 * とっぷ
 */
Route::get('/', function () { return view('top'); })->name('top');

/**
 * つくったひと
 */
Route::get('contact', function () { return view('contact'); })->name('contact');

/**
 * みんなのきろく
 */
Route::prefix('everyone')->name('everyone.')->group(function() {
    Route::get('/records', 'EveryoneController@records')->name('records');
    Route::get('/{record}/items', 'EveryoneController@items')->name('items');
    Route::get('/user', 'EveryoneController@user')->name('user');
});

/**
 * にんしょう
 */
Auth::routes(['register' => true, 'reset' => true, 'verify' => true, 'confirm' => false]);

/**
 * まいぺーじ
 */
Route::middleware('auth')->group(function () {
    Route::middleware('verified')->group(function () {
        /**
         * きろく
         */
        Route::resource('records', 'RecordController')->except(['show']);

        /**
         * あいてむ
         */
        Route::prefix('items')->name('items.')->group(function(){
            Route::get('/{record}', 'ItemController@index')->name('index');
        });

        /**
         * とうろく情報のへんこう
         */
        Route::prefix('mypage')->name('mypage.')->group(function(){
            Route::get('/profile', 'UserController@showProfileEditForm')->name('profile');
            Route::put('/profile', 'UserController@profileUpdate')->name('profile.update');
            Route::get('/reset/{token}', 'UserController@emailReset')->name('email.reset');
            Route::get('/password', 'UserController@showPasswordChangeForm')->name('password');
            Route::put('/password', 'UserController@passwordUpdate')->name('password.update');
            Route::get('/unsubscribe', 'UserController@showUnsubscribeForm')->name('unsubscribe');
            Route::delete('/unsubscribe', 'UserController@unsubscribe')->name('unsubscribe');
        });
    });
});
