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
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/** Web(网站部分) */

/** 网站页面部分 首页 详细页 搜索页 */
Route::group(['prefix' => '', 'namespace' => 'Web'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/submit-need', 'IndexController@submitNeed');
    Route::get('/designer-register', 'IndexController@designerRegister');
    Route::get('//our-products', 'IndexController@ourProducts');
});
