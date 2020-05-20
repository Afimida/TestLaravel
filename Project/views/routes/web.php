<?php

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
/*
 * comments
 */
Route::get('/', 'CommentsController@show');
Route::post('/comment-add', 'CommentsController@add');
/*
 * Login
 */

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

/*
 * Ajax
 */

Route::get('/ajax', 'AjaxController@ajaxRequest');
Route::post('/post-ajax', 'AjaxController@ajaxRequestPost');
