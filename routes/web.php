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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



    // Stroke play
    Route::get('stroke/','StrokeController@index')->name('stroke.index');

    Route::post('stroke/store/{partidas}','StrokeController@store')->name('stroke.store');

    //Partida

    

    Route::post('partida/store','PartidaController@store')->name('partida.store');



    // Route::patch('profile/{user}','ProfileController@update')->name('dashboard.profile.update');
    // Route::get('profile/editpassword','ProfileController@editPassword')->name('dashboard.profile.editPassword');
    // Route::post('profile/updatepassword','ProfileController@updatePassword')->name('dashboard.profile.updatePassword');

    // Match Play

    Route::get('match','matchController@index')->name('match.index');


    //stableford play

    Route::get('stableford','stablefordController@index')->name('stableford.index');





