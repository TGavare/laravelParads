<?php

use Illuminate\Support\Facades\Route;
use App\Challenge;

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

Route::get('/', 'ChallengeController@index')->name('index');

Route::get('/challenge', function () {
    return view('challenge');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/my-challenges', 'ChallengeController@myChallenges');

Route::resource('/challenges', 'ChallengeController');

Route::resource('/categories', 'CategoryController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
