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

    
    $users= App\User::find(4);

    //return $users->company->first()->name;
    return $users->company[1]->name;
    
    

    foreach ($users->company as $user) {
         return $user->registration_number;
      }


    //dd($users->company;
    //->companies->full_name
});

Route::get('/Profile','ProfileController@index')->middleware(['auth','verified']);
Route::get('/Profile2','ProfileController@index2')->middleware(['auth','verified']);
Route::post('/Profile2','ProfileController@edit')->middleware(['auth','verified']);
Route::post('/Profile/{id}/edit','ProfileController@edit')->middleware(['auth','verified']);
Route::post('/Company/{id}/edit','CompanyController@edit')->middleware(['auth','verified']);
Route::post('/Resume/{id}/edit','ResumeController@edit')->middleware(['auth','verified']);

Route::get('/PostRegister','ProfileController@PostRegister')->middleware(['auth','verified']);
Route::get('/logout','Auth\LoginController@logout');

Route::get('/reset','Auth\LoginController@resetPass');

//public link profile
Route::get('/Resume/{id}','PublicController@index');




Auth::routes(['verify' => true]); //utk login

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');//->name('home');
