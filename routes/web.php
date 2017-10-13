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
    return view('home');
})->name('homepage');


/*AUTHENTICATION*/
Route::get('/signup',[
	'uses' => 'UserController@signup',
	'as'=>'indexsignup']);
Route::post('/postsignup',[
	'uses' => 'UserController@postsignup',
	'as'=>'postsignup']);


Route::get('/signin',[
	'uses' => 'UserController@signin',
	'as'=>'index']);
Route::post('/postsignin',[
	'uses' => 'UserController@postsignin',
	'as'=>'postsignin']);


/*USER DASHBOARD*/
Route::group(['middleware' => 'checkUser'], function () {

    Route::get('user/dashboard', function () {
        
    });

});
Route::get('/signout',function(){
	Auth::signout();

	return redirect('/');
});
