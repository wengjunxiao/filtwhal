<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/** 认证 */
 
/*// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
/** Web(网站部分) */
 Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
 

/** 网站页面部分 首页 详细页 搜索页 */
Route::group(['prefix' => '', 'namespace' => 'Web'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/submit-need', 'IndexController@submitNeed');
    Route::get('/designer-register', 'IndexController@designerRegister');
    Route::get('/our-products', 'IndexController@ourProducts');
    Route::get('/about', 'IndexController@about');
    Route::get('/contact-us', 'IndexController@contactUs');
    Route::get('/recruit', 'IndexController@recruit');
    Route::get('/reset', 'IndexController@reset');
});
