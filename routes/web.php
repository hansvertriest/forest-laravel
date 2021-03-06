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
Route::get('/home-edit', [
	'middleware' => 'auth.admin',
	'uses' => 'HomeController@getEdit'
])->name('home.edit');
Route::post('/home-edit', 'HomeController@postEdit');
Route::post('/page-names-edit', 'HomeController@postPageNames');

// custom pages
Route::get('/page/{slug}', 'CustomPagecontroller@getPage')->name('customPage.get');
Route::get('/custom-page-edit/{slug}', [
	'middleware' => 'auth.admin',
	'uses' => 'CustomPagecontroller@getEdit'
])->name('customPage.edit');
Route::post('/custom-page-edit/{slug}', [
	'middleware' => 'auth.admin',
	'uses' => 'CustomPagecontroller@savePage'
])->name('customPage.postEdit');

// blog
Route::get('/blog-overview', 'BlogPostcontroller@getBlogPostOverview')->name('blogPost.getOverview');
Route::get('/blog/{slug}', 'BlogPostcontroller@getBlogPost')->name('blogPost.get');
Route::get('/blog-edit/{slug}', [
		'middleware' => 'auth.admin',
		'uses' => 'BlogPostcontroller@getEdit'
	])->name('blogPost.edit');
Route::post('/blog-edit/{slug}', [
	'middleware' => 'auth.admin',
	'uses' => 'BlogPostcontroller@saveBlogPost'
])->name('blogPost.postEdit');

// newsletter subscribe
Route::post('/newsletter/subscribe', 'MailchimpController@subscribe')->name('mailchimp.subscribe');
Route::post('/newsletter/unsubscribe', 'MailchimpController@unSubscribe')->name('mailchimp.unsubscribe');

//admin
Route::get('/admin', [
	'middleware' => 'auth.admin',
	'uses' => function() {
		return redirect(route('admin.pages'));
	}
])->name('admin');

Route::get('/admin/pages', [
	'middleware' => 'auth.admin',
	'uses' => 'AdminController@getPages'
])->name('admin.pages');

Route::get('/admin/delete-page/{slug}', [
	'middleware' => 'auth.admin',
	'uses' => 'AdminController@deletePage'
])->name('admin.deletePage');

Route::get('/admin/blog', [
	'middleware' => 'auth.admin',
	'uses' => 'AdminController@getBlog'
])->name('admin.blog');

Route::get('/admin/delete-blog/{slug}', [
	'middleware' => 'auth.admin',
	'uses' => 'AdminController@deleteBlog'
])->name('admin.deleteBlog');

Route::get('/admin/donations', [
	'middleware' => 'auth.admin',
	'uses' => 'AdminController@getDonations'
])->name('admin.getDonations');

Route::post('/admin/mailchimp', [
	'middleware' => 'auth.admin',
	'uses' => 'AdminController@postMailchimpKey'
])->name('admin.postMailchimpKey');

Route::get('/admin/mailchimp', [
	'middleware' => 'auth.admin',
	'uses' => 'AdminController@getMailchimpKey'
])->name('admin.getMailchimpKey');


// donations

Route::name('webhooks.mollie')->post('webhooks/mollie', 'WebhookController@handle');
Route::get('/donate', 'DonationController@getMakeDonation')->name('donation.getMakeDonation');
Route::get('/donation-overview', 'DonationController@getDonationOverview')->name('donation.getOverview');
Route::post('/donation', 'DonationController@postMakeDonation')->name('donation.makeDonation');
Route::get('/succes/{id}', 'DonationController@getSucces')->name('donation.paymentSucces');

// mails
Route::post('/contact', 'MailController@postContact')->name('mail.postContact');

// auth
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');