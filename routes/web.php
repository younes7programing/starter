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

Route::get('/', function () {
    $data = [];
    $data['name'] = "Younes";
    $data['age'] = 27;
    return view('welcome')->with($data);
});

Route::get('index', 'Front\UserController@getIndex');


Route::get('/test1', function () {
    return "test";
})->name('test1');

//Route ID
Route::get('/test2/{id}', function ($id) {
    return $id;
})->name('test2');
Route::get('/greeting', function () {
    return 'Hello World';
});

//Route namespace
Route::namespace('Front')->group(function () {
    Route::get('users', 'UserController@showUserName');
});

Route::get('second', 'Admin\SecondController@showString');

/*
//Route Group
    Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return 'it works';
    });
    Route::get('show', 'UserController@showUserName');
    Route::delete('delete', 'UserController@showUserName');
    Route::put('put', 'UserController@showUserName');
});
*/

//Middleware
Route::get('check', function () {
    return 'middleware';
})->middleware('auth');


//Login Route
Route::get('login', function () {
    return 'you must be login';
})->name('login');


//controller and route resource
Route::resource('news', 'NewsController');

/*
Route::get('news', 'ResourceController@index');
Route::get('news/create', 'ResourceController@create');
Route::get('news/{id}/edit', 'ResourceController@edit');
*/


/**Landing Page **/
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about ');
});




Auth::routes(['verify'=>true]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
    