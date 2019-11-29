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
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('project', 'ProjectController');
Route::resource('artikel', 'ArtikelController')->except(['store', 'edit', 'update', 'destroy', 'create']);
Route::resource('forum', 'ForumController');
Route::get('forum/like/{id}', 'ForumController@like')->name('forum.like');
Route::post('komentar', 'KomentarController@store')->name('komentar.store');

Route::resource('user', 'UserController');
Route::get('user/{id}/isisaldo', 'UserController@isisaldo')->name('user.isisaldo');
Route::get('pasar', 'PasarController@index')->name('pasar.index');
Route::put('/project/{project}', 'ProjectController@modali')->name('project.modali');
// Admin
Route::prefix('admin')
    ->namespace('admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('admin');
        Route::resource('artikel', 'ArtikelController')->except(['show', 'index']);
        Route::get('/artikel', 'ArtikelController@indexx')->name('artikel');
        Route::get('/forum', 'ForumController@indexx')->name('admin.forum.index');
        Route::delete('/forum/{forum}', 'ForumController@destroyy')->name('admin.forum.destroy');
        Route::get('/project', 'ProjectController@indexx')->name('admin.project.index');
        Route::delete('/project/{project}', 'ProjectController@destroyy')->name('admin.project.destroy');
        Route::get('/isisaldo', 'IsisaldoController@index')->name('admin.isisaldo.index');
        Route::put('/isisaldo/{isisaldo}', 'IsisaldoController@update')->name('admin.isisaldo.update');
        Route::get('/pasar', 'PasarController@indexx')->name('admin.pasar.index');
        Route::get('/transaksi', 'TransaksiController@index')->name('admin.transaksi.index');
        Route::get('/pasar/create', 'PasarController@create')->name('pasar.create');
        Route::post('/pasar', 'PasarController@store')->name('pasar.store');
        Route::delete('/pasar/{pasar}', 'PasarController@destroy')->name('pasar.destroy');
    });
