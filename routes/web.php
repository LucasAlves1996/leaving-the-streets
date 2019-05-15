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

Route::get('/', 'CustomController@homePage');

Route::get('criar-post', function(){
	return view('post.home-page');
});

Route::post('criar-post', 'PostController@postCreate');

Route::get('faça-uma-doação', 'CustomController@donationPage');

Route::post('faça-uma-doação', 'MailController@sendDonationEmail');

Route::get('seja-um-voluntário', 'CustomController@volunteerPage');

Route::post('seja-um-voluntário', 'MailController@sendVolunteerEmail');

Route::get('sobre', 'CustomController@aboutPage');

Route::get('login', 'CustomController@loginPage');

Route::post('login', 'LoginController@auth');

Route::get('cadastro', 'CustomController@signPage');

Route::get('user-insert', function(){
	return view('post.sign-page');
});

Route::post('user-insert', 'UserController@userInsert');

Route::get('sair', 'LogoutController@logout');