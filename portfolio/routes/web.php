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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', function () {
    return view('home');
 });

 Route::get('/work', function () {
    return view('work');
 });

 Route::get('/about', function () {
    return view('about');
 });

 Route::get('/contact','ContactController@index', function () {
    return view('contact');
 });

 Route::get('/layout', function () {
   return view('layout');
});

Route::post('/contact/send', 'ContactController@ContactRequest');

Route::get('/login', function () {
   return view('login');
});

Route::get(    'login',                    'AuthController@index');
Route::post(   'post-login',              'AuthController@postLogin');
Route::get(    'registration',             'AuthController@registration');
Route::post(   'post-registration',       'AuthController@postRegistration');
Route::get(    'dashboard',                'AuthController@dashboard');
Route::get(    'logout',                   'AuthController@logout');
