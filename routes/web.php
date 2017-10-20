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
  return view('welcome');
});

// Route::get('/books', function () {
//     return view('books/index');
// });
Route::get('books',[
  'uses' => 'BookController@index'
]);

Route::get('books/index',[
  'uses' => 'BookController@index'
]);

Route::get('books/create',[
  'uses' => 'BookController@create'
]);


Route::post('books/store',[
  'uses' => 'BookController@store'
]);

Route::get('books/show/{id}',[
  'uses' => 'BookController@show'
]);

Route::get('books/{id}/edit',[
  'uses' => 'BookController@edit'
]);

Route::post('books/update',[
  'uses' => 'BookController@update'
]);

Route::get('books/{id}/destroy',[
  'uses' => 'BookController@destroy'
]);
