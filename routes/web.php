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

Route::group(['prefix' => 'user'], function() {
  Route::get('/signup',['uses' => 'UserController@getSignup','as' => 'user.signup']);
 });
Route::get('/signin',['uses' => 'UserController@getSignin','as' => 'user.signin']);
Route::post('/signin',['uses' => 'UserController@postSignin','as' => 'user.signin']);

//Route::get('/signin','UserController@getSignin'->name('signin');
/*
// ビューパークのログイン画面を表示
Route::get('/','ViewParkController@index')->name
('viwepark_login');


//ログイン認証後
Auth::routes();
//実行内容選択画面を表示
Route::get('/contents_select','ViewParkController@select')->name
('contents_select');
*/
