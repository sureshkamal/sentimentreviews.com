<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OtpController;
use App\Models\Store;

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
		$stores = Store::with('user')->get();
        return view('admin.stores', compact('stores'));
        // return view('admin.stores');		
    });
	Route::get('/add-store', function () {
        return view('admin.create-store');		
    });
	Route::post('/add-store', [AdminController::class, 'addStore']);
	Route::get('/{store}/create-branch', [AdminController::class, 'createBranchPage']);
	Route::post('/{store}/create-branch', [AdminController::class, 'createBranch']);
	Route::get('/{store}/view-branches', [AdminController::class, 'viewBranches']);

});

Route::get('/contact-us', function () {
    return view('contactus');
});
Route::post('/contact', [HomeController::class, 'submitForm']);

// Route::get('/{store}', [StoreController::class, 'index'])->name('store.index');
// Route::get('/{store}/login', [StoreController::class, 'login'])->name('store.login');
Route::get('/{store}', [StoreController::class, 'login'])->name('store.login');
Route::get('/{store}/otp', [StoreController::class, 'otp'])->name('store.otp');
Route::get('/{store}/review', [StoreController::class, 'index'])->name('store.index');
Route::get('/{store}/nps', [StoreController::class, 'nps'])->name('store.nps');
Route::get('/{store}/thank-you', [StoreController::class, 'npsThanks'])->name('store.npsThanks');


// New Pages

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
//login-signup
Route::post('/signin', [LoginController::class, 'signin']);

Route::post('/send-otp', [OtpController::class, 'sendOtp']);
Route::post('/validate-otp', [OtpController::class, 'validateOtp']);

Route::get('/enter-otp', function () {
    return view('otp');
});

Route::post('/validate-otp', [OtpController::class, 'validateOtp']);


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	Route::post('/update-count', [UserController::class, 'updateCount']);
});

