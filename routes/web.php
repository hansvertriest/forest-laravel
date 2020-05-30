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
	return view('welcome');
});

// home
Route::get('/', 'HomeController@getIndex')->name('home');
Route::get('/home-edit', 'HomeController@getEdit')->name('home.edit');
Route::post('/home-edit', 'HomeController@postEdit');

// custom pages
Route::get('/page/{slug}', 'CustomPagecontroller@getPage')->name('customPage.get');
Route::get('/custom-page-edit/{slug}', 'CustomPagecontroller@getEdit')->name('customPage.edit');
Route::post('/custom-page-edit/{slug}', 'CustomPagecontroller@savePage')->name('customPage.postEdit');

// blog
Route::get('/blog-overview', 'BlogPostcontroller@getBlogPostOverview')->name('blogPost.getOverview');
Route::get('/blog/{slug}', 'BlogPostcontroller@getBlogPost')->name('blogPost.get');
Route::get('/blog-edit/{slug}', [
		'middleware' => 'auth.admin',
		'uses' => 'BlogPostcontroller@getEdit'
	])->name('blogPost.edit');
Route::post('/blog-edit/{slug}', 'BlogPostcontroller@saveBlogPost')->name('blogPost.postEdit');

// auth
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');