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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/','HomeController@index');
// Route::get('/home', 'HomeController@redirect');
Auth::routes();
Route::get('/home','HomeController@indexx');
Route::get('/add_doctor_view','AdminController@addview');
Route::POST('/upload_doctor','AdminController@upload');


