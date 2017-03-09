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
// Static Pages
Route::get('/',              'StaticPageController@index');
Route::get('about',          'StaticPageController@about');
Route::get('pricing',        'StaticPageController@pricing');
Route::get('contact',        'StaticPageController@contact');
Route::get('terms-of-use',   'StaticPageController@termsOfUse');
Route::get('privacy-policy', 'StaticPageController@privacyPolicy');
Route::get('components',     'StaticPageController@components');

// Authentication & Dynamic Page Management - need to make explicit for L54
Route::controllers([
    'auth'         => 'Auth\AuthController',
    'password'     => 'Auth\PasswordController',
    'admin'        => 'AdminController',
    'home/your'    => 'UserController',
    'subscription' => 'SubscriptionController',
    'home'         => 'HomeController'
]);

/*
|--------------------------------------------------------------------------
| Login/ Logout/ Password
|--------------------------------------------------------------------------
*/
Route::get('logout', 'Auth\LoginController@getLogout');


Route::get('welcome', function () {
    return view('welcome');
});
