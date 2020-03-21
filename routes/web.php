<?php

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
    return redirect()->route('books.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/books', 'BookController@index')->name('books.index');
Route::get('/books/add', 'BookController@addBook')->name('books.add');
Route::post('/books/store', 'BookController@store')->name('books.store');
Route::post('/books/update', 'BookController@update')->name('books.update');
Route::post('/books/destroy', 'BookController@destroy')->name('books.destroy');
Route::post('/books/return', 'BookController@returnBook')->name('books.return');



