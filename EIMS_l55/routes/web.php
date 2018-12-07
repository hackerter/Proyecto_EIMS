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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/workers-list', 'HomeController@getList');
Route::get('/admin/workers-new', 'HomeController@getRegister');
Route::post('/admin/register-worker', 'HomeController@postRegisterWorker')->name('createWorker');
Route::post('/admin/edit-worker', 'HomeController@postWorkerEdit')->name('editWorker');
Route::post('/admin/destroy-worker', 'HomeController@postWorkerDestroy')->name('deleteWorker');
Route::put('/admin/update-worker', 'HomeController@putWorkerUpdate')->name('updateWorker');

Route::get('/admin/supplier-list', 'HomeController@getListSup');
/*Route::get('/admin/supplier-new', 'HomeController@getRegisterSup');*/
// Route::post('/admin/register-supplier', 'HomeController@postRegisterWorker')->name('createWorker');
// Route::post('/admin/edit-supplier', 'HomeController@postWorkerEdit')->name('editWorker');
// Route::post('/admin/destroy-supplier', 'HomeController@postWorkerDestroy')->name('deleteWorker');
// Route::put('/admin/update-supplier', 'HomeController@putWorkerUpdate')->name('updateWorker');
