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

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/sermons-details', function () {
    return view('sermons-details');
});

Route::get('/sermons', function () {
    return view('sermons');
});

Route::get('/single-post', function () {
    return view('single-post');
});
