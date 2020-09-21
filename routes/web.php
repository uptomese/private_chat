<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'Chat\ChatController@index')->name('home');

Route::post('get_messages', 'Chat\ChatController@fetchMessages');
Route::post('messages', 'Chat\ChatController@sendMessage');
Route::post('update_message', 'Chat\ChatController@updateMessage');
Route::delete('message', 'Chat\ChatController@destroyMessage');

Route::post('friends_list', 'Chat\UserController@getFriends');
Route::post('/recount_unread', 'Chat\ChatController@reCount');
Route::get('/user', function () {
    return Auth::user();
});
Route::post('/reading', 'Chat\ChatController@reading');
Route::post('/re_reading', 'Chat\ChatController@reReading');

Route::post('/upload', 'Chat\ChatController@uploadFile');
Route::post('/video_time', 'Chat\ChatController@videoTime');
Route::post('/video_time_end', 'Chat\ChatController@videoTimeEnd');