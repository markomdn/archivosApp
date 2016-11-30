<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * Galeria
 */

Route::get('archivos',  'ArchivosController@getArchivos');
Route::get('deleteFoto',  'ArchivosController@deleteFoto');
Route::post('upLoadFile', 'ArchivosController@upLoadFile');

Route::get('newArchivo', 'ArchivosController@getCreateArchivo');
Route::post('addGaleria', 'ArchivosController@createGaleria');
Route::get('galeriaEdit/{id}', 'ArchivosController@getGaleriaEdit');
Route::post('editGaleria', 'ArchivosController@editGaleria');
Route::post('deleteGaleria', 'ArchivosController@deleteGaleria');
Route::post('upLoadImageGaleria', 'ArchivosController@upLoadImageGaleria');
Route::post('upLoadImageGaleriaApi', 'ArchivosController@upLoadImageGaleriaApi');
