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

/*
*--------------------------
* General Navigation Routes
*--------------------------
*/

Route::get('/', [
    'uses' => 'QuotesController@getIndex',
    'as' => 'quotes.index'
]);

Route::get('/categories', [
    'uses' => 'QuotesController@getCategories',
    'as' => 'quotes.categories'
]);

Route::get('/custom_search', [
    'uses' => 'QuotesController@getCustomSearch',
    'as' => 'quotes.custom_search'
]);

Route::get('/submit_quote', [
    'uses' => 'QuotesController@getSubmitQuote',
    'as' => 'quotes.submit_quote'
]);

Route::get('/time_periods', [
    'uses' => 'QuotesController@getTimePeriods',
    'as' => 'quotes.time_periods'
]);

Route::get('/authors', [
    'uses' => 'QuotesController@getAuthors',
    'as' => 'quotes.authors'
]);


/*
*---------------------------
* User Management Routes
*---------------------------
*/

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});
