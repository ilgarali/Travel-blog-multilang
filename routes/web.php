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


Auth::routes();

Route::namespace('Back')->prefix('admin')->name('admin.')->middleware('is_admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::resource('/category', 'CategoryController');
    Route::resource('/post', 'PostController');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::delete('/contact/{id}', 'ContactController@destroy')->name('delcontact');
    Route::get('/comment', 'CommentController@index')->name('comment');
    Route::delete('/comment/{id}', 'CommentController@destroy')->name('delcomment');
    Route::put('/comment/{id}', 'CommentController@approve')->name('approvecomment');
    
});

Route::namespace('Front')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('locale/{locale}','HomeController@locale');

    Route::get('/about','StaticController@about')->name('about');
    Route::get('/contact','StaticController@contact')->name('contact');
    Route::post('/contactus','StaticController@contactus')->name('contactus');

    Route::post('/comment','StaticController@comment')->name('comment');
    Route::get('/search','HomeController@search')->name('search');
    Route::get('{category}','HomeController@category')->name('category');

    Route::get('/{categoryslug}/{postslug}', 'HomeController@single')->name('single');
});

