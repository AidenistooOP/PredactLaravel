<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


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
    return view('homepage');
});

Route::get('/aiden-onyenwenu', function () {
    return view('aiden');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/projecten', function () {
    return view('projecten');
});

Route::get('/offerte', function () {
    return view('offerte');
});

Route::get('/blogs', 'App\Http\Controllers\BlogController@index')->name('blog.index');
Route::get('/blogs/{title}', 'App\Http\Controllers\BlogController@show')->name('blog.show');
Route::delete('/blogs/{id}', 'App\Http\Controllers\BlogController@destroy')->name('blog.destroy');
Route::get('/blogs/{id}/edit', 'App\Http\Controllers\BlogController@edit')->name('blog.edit');
Route::put('/blogs/{id}', 'App\Http\Controllers\BlogController@update')->name('blog.update');




