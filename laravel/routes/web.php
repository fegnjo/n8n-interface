<?php

use App\Http\Middleware\CheckPeriod;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::group(['namespace' => 'Chat'], function() {
        Route::get('/', 'StatController@index')->name('home')->middleware('check.period');
        Route::get('/chats', 'GetAllController')->name('chats');
        Route::get('/chats/{id}', 'GetChatController')->name('chat');
    });
});
