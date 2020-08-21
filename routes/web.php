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

//  route tuteur
Route::get('listetuteur', 'TuteurController@index');
Route::get('formulairetuteur', 'TuteurController@create');
Route::post('formulairetuteur', 'TuteurController@store');
//  route apprenants

Route::get('formapprenant', 'ApprenantController@create');
Route::post('formapprenant', 'ApprenantController@store');
Route::get('listapprenant', 'ApprenantController@index');
Route::get('supprimerapprenant', 'ApprenantController@destroy');
Route::get('miseajourapprenant', 'ApprenantController@edit');
Route::post('miseajourapprenant', 'ApprenantController@update');
Route::get('detail/{apprenant}', 'ApprenantController@show');

// page aide
Route::get('aide', 'AideController@index');
