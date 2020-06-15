<?php

use App\Http\Controllers\DemandeController;
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
//welcome





/////////////////DEMANDE//////////////////////////
Route::post('/demande', 'DemandeController@create');
Route::get('/demande/create/{id}', 'DemandeController@create_from');
Route::resource('demande','DemandeController');


 /////////////LABS////////////////
 //web
Route::get('/catalogue','RessourcesController@index');

Route::get('/catalogue/{slug}','RessourcesController@show');



//////////////////////ADMIN/////////////////////////
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/////////////////AUTHENTIFICATION//////////////////////
Auth::routes();



////////////HOME(dashboard)/////////////////////
Route::get('/','HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all','DemandeController@index');


///////////////////////DEMO APPLICATION////////////////


Route::get('/Demo','DemoController@demo');
