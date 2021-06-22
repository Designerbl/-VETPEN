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
  return view('index');
})->name('home');

Route::get('/reviews', function () {
  return view('reviews');
})->name('reviews');

Route::get('/reviews/submit', 'FeedbackController@allData')->name('feedback-data');
Route::post('/reviews/submit', 'FeedbackController@submit')->name('feedback-form');