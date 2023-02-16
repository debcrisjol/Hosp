<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/home','HomeController@index');

Auth::routes();

Route::get('/home','HomeController@indexx')->name('home');
Route::get('/add_doctor_view','AdminController@addview');
Route::post('/upload_doctor','AdminController@upload');
Route::post('/appointment','HomeController@appointment');
Route::get('/myappointment','HomeController@myappointment');

