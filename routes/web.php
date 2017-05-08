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
*----------------------------
* Require Database Connection
*----------------------------
*/

Route::get('/', function()
{
    return User::all();
});

/*
*--------------------------
* General Navigation Routes
*--------------------------
*/

Route::get('/', [
    'uses' => 'QuotesController@getIndex',
    'as' => 'quotes.index'
]);

Route::get('/categories/{category}', [
    'uses' => 'QuotesController@getCategories',
    'as' => 'quotes.categories'
]);

Route::get('/custom_search', [
    'uses' => 'QuotesController@getCustomSearch',
    'as' => 'quotes.custom_search'
]);

Route::get('customSearchResults', [
    'uses' => 'QuotesController@getCustomSearchResults',
    'as' => 'quotes.custom_search_results'
]);

Route::get('/submit_quote', [
    'uses' => 'QuotesController@getSubmitQuote',
    'as' => 'quotes.submit_quote'
]);

Route::get('/time_periods/{period1}/{period2}', [
    'uses' => 'QuotesController@getTimePeriods',
    'as' => 'quotes.time_periods'
]);

Route::get('/api_description', [
    'uses' => 'QuotesController@getApiDescription',
    'as' => 'quotes.api_description'
]);

/*
*---------------------------
* Form Processing Routes
*---------------------------
*/

Route::post('authorSearch', [
    'uses' => 'QuotesController@postAuthors',
    'as' => 'quotes.authors'
]);

Route::post('customSearchResults', [
    'uses' => 'QuotesController@postCustomSearchResults',
    'as' => 'quotes.custom_search_results'
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

        Route::get('/api_key', [
            'uses' => 'UserController@getApiKey',
            'as' => 'user.api_key'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});
