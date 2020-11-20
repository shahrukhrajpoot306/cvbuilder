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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('user-detail/create', 'UserDetailController@create')->middleware('auth')->name('user-detail.create');

//Route::post('user-detail', 'UserDetailController@store')->middleware('auth');

//Route::get('education/create', 'EducationController@create')->middleware('auth')->name('education.create');

//Route::post('education', 'UserDetailController@store')->middleware('auth');

Route::resource('user-detail', 'UserDetailController')->middleware('auth');

Route::resource('education', 'EducationController')->middleware('auth');

Route::resource('career', 'CareerController')->middleware('auth');

Route::resource('skill', 'SkillController')->middleware('auth');

Route::resource('resume', 'ResumeController')->middleware('auth');

Route::resource('resume2', 'Resume2Controller')->middleware('auth');




