<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'IndexController@index')->name('index');

Route::resources([
    'page' => 'PageController',
    'news' => 'PostController',
 ], ['only' => ['index', 'show']]);

 Route::group(['middleware' => 'roles', 'prefix' => 'dashboard'], function () {

    Route::get('/', 'Dashboard\IndexController@index')->name('dashboard');

    // Route::name('dashboard.')->group(function () {
        // Route::resource('event', 'Dashboard\EventController', ['except' => ['show']]);
        // Route::resource('member', 'Dashboard\MemberController', ['except' => ['show']]);
        // Route::resource('game', 'Dashboard\GameController', ['except' => ['show']]);
        // Route::resource('post', 'Dashboard\PostController', ['except' => ['show']]);
        // Route::resource('page', 'Dashboard\PageController', ['except' => ['show']]);
    // });

});