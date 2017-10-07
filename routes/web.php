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

use App\Question;


Route::get('/', ['uses' => 'IndexController@index'])->name('home');
Route::get('/add', ['uses' => 'QuestionController@index'])->name('add');
Route::post('/add', ['uses' => 'QuestionController@addQuest'])->name('addQuest');

Auth::routes();

Route::get('/admin', ['uses' => 'AdminController@index'])->name('admin');
Route::post('/admin', ['uses' => 'AdminController@changeList'])->name('changeList');

Route::get('/admin/listTheme', ['uses' => 'AdminController@listTheme'])->name('listTheme');
Route::post('/admin/listTheme', ['uses' => 'AdminController@postListTheme'])->name('postListTheme');

Route::get('/admin/listTheme/more/{id}', ['uses' => 'AdminController@show'])->name('more');
Route::post('/admin/listTheme/more/{id}', ['uses' => 'AdminController@moreTheme'])->name('moreTheme');