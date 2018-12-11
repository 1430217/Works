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

// Rutas de las paginas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'PagesController@dashboard');

//Rutas para auth
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/registrar/{tipo}', 'PagesController@registrar')->name('registrar');
Route::get('/registrar/{tipo}', 'PagesController@registrarFreelancer')->name('registrarFreelancer');
Route::post('/registrar', 'PagesController@registrarUser')->name('registrarUser');

Route::resource('/proyecto', 'ProyectoController');


