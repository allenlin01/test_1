<?php
 /** there is something to do */
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

Route::get('/',function(){
    return 'Hello world';
});

Route::get('/upload','uploadcontroller@upload' );

Route::get('/upload1/{id}','uploadcontroller@data_upload') ;
