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

Route::get('/', function () {
    $challenges = Challenge::all();

    return View::make('index')->with(compact(['challenges']));
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/new-challenge', function () {
    return view('new-challenge');
});

Route::get('/challenge', function () {
    return view('challenge');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::resource('/challenges', 'ChallengeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
