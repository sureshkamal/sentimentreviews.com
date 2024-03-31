<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
	Route::prefix('login')->group(function () {

		Route::get('/', function () {
	        return view('admin.login');		
	    });

		Route::post('/auth', [AdminController::class, 'loginAuthenticate']);

    });

    Route::get('/dashboard', function () {
        return view('admin.index');		
    });
    Route::get('/stores', function () {
        return view('admin.stores');		
    });
    
});

Route::get('/contact-us', function () {
    return view('contactus');
});
Route::post('/contact', [HomeController::class, 'submitForm']);

Route::get('/{store}', [StoreController::class, 'index'])->name('store.index');
Route::get('/{store}/nps', [StoreController::class, 'nps'])->name('store.nps');
Route::get('/{store}/thank-you', [StoreController::class, 'npsThanks'])->name('store.npsThanks');


// New Pages

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

