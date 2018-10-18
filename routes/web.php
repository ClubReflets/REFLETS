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

// Home
Route::get('/', 'HomeController@index');
Route::get('apropos', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::get('galerie', 'HomeController@gallery');

// Dashboard
Route::get('admin', function() {
    return view('dashboard');
})->name('admin');

Route::resource('admin/organization', 'OrganizationController')->except([
    'create', 'destroy', 'show'
]);
