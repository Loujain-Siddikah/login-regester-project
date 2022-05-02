<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\SocialiteController;
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
//user route
Route::get('/user', 'UserController@index')->name('user')->middleware('PreventBackHistory');//هاد المدلوير بخليني اذا سجلت خروج ما اقدر ارجع عصفحة اليوزر وانا عصفحة لوغ ان
//admin route
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('PreventBackHistory');

Route::get('/auth/redirect/{provider}','Auth\SocialiteController@redirect');
Route::get('/auth/callback/{provider}','Auth\SocialiteController@callback');
