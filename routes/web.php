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
require __DIR__.'/auth.php';

Route::get('/', 'HomeController@index');
Route::get('/about-us', 'AboutUsController@index')->name('about-us');
Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');
Route::get('/feedback', 'FeedbackController@index')->name('feedback');
Route::resource('feedback', 'FeedbackController');
Route::get('/search', 'HomeController@search')->name('search');
Route::middleware(['auth'])->group(function () {
    /* Review Jobs controller*/
    Route::resource('review-job', 'ReviewJobsController');
    /* job posts controller*/
    Route::resource('job', 'JobController');
    /* job views controller*/
    Route::resource('job-views', 'JobViewsConroller');
    /* User controller*/
    Route::get('/user-profile', 'UserController@index')->name('user-profile');
    Route::resource('user', 'UserController');
});
