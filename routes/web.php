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
Route::get('/job-view/{id}','JobController@viewJob')->name('job-view');

Route::middleware(['auth'])->group(function () {
    Route::get('/search', 'JobViewsConroller@search')->name('search');
    /* Review Jobs controller*/
    Route::resource('review-job', 'ReviewJobsController');
    /* job posts controller*/
    Route::get('/job-post-list','JobController@viewPostsJobs')->name('job-post-list');
    Route::get('/delete-job/{id}','JobController@deleteJob')->name('delete-job');
    Route::resource('job', 'JobController');
    /* job views controller*/
    Route::get('/view-job-types/{type}','JobViewsConroller@viewJobWithType')->name('view-job-types');
    Route::resource('job-views', 'JobViewsConroller');
    /* User controller*/
    Route::get('/user-profile', 'UserController@index')->name('user-profile');
    Route::resource('user', 'UserController');
});
