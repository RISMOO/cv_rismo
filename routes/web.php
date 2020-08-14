<?php

use App\Http\Controllers\MessageController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
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
/////////ABOUT///////
Route::get('/about','AboutController@about');
Route::get('/index','AboutController@index');
Route::get('/projets','AboutController@projets');
////AUTH///////////////


Route::get('/','indexController@index');
Route::get('/home', 'HomeController@index')->name('home');

/////////////////CV/////////////////////
Route::get('/competences','CvController@competences');
Route::get('/experiences','CvController@experiences');
Route::get('/loisirs','CvController@loisirs');
Route::get('/formations','CvController@formations');


//////////////////////ADMIN/////////////////////////
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

////////////////CONTACT/////////////
Route::resource('/contact','ContactController');

///////////////////MESSAGES///////
Route::resource('/message','MessageController');

Route::get('/message/create', 'MessageController@create');
Route::post('/message','MessageController@store');



