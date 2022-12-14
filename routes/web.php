<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPost;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerSocial;

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

Route::get('/', [ControllerUser::class, 'index']);

Route::get('/login', [ControllerUser::class, 'login']);

Route::get('/register', [ControllerUser::class, 'register']);

Route::get('/logout', [ControllerUser::class, 'logout']);

Route::get('/actualites', [ControllerPost::class, 'actualites']);

Route::get('/publish', [ControllerPost::class, 'publish']);
 
Route::get('/search', [ControllerPost::class, 'search']);

Route::get('/articles/{id?}', [ControllerPost::class, 'articles']) -> where('id','[0-9]+') ->name('articles');;

Route::get('/subscription', [ControllerSocial::class, 'subscription']);

Route::get('/add/{id}', [ControllerSocial::class, 'add']) -> where('id','[0-9]+') ->name('add');

Route::get('/delete/{id}', [ControllerSocial::class, 'delete']) -> where('id','[0-9]+')->name('delete');


Route::post('/publishT', [ControllerPost::class, 'publishT']);

Route::post('/addFriend', [ControllerSocial::class, 'addFriend']);

Route::post('/delFriend', [ControllerSocial::class, 'delFriend']);

Route::post('/loginT', [ControllerUser::class, 'loginT']);

Route::post('/registerT', [ControllerUser::class, 'registerT']);
