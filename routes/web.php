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
Route::get('/process', 'HomeController@process');
Route::get('/job', 'HomeController@job');
Route::get('/about-us', 'AboutUsController@index')->name('about-us');
Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');
Route::get('/feedback', 'FeedbackController@index')->name('feedback');
Route::resource('feedback', 'FeedbackController');

Route::middleware(['auth'])->group(function () {
    /* Review Jobs controller*/
    Route::resource('review-job', 'ReviewJobsController');
    /* job posts controller*/
    Route::resource('job', 'JobController');
    /* User controller*/
    Route::get('/user-profile', 'UserController@index')->name('user-profile');
    Route::resource('user', 'UserController');
});
