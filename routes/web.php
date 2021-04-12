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

use Illuminate\Support\Facades\Route;

Route::post('/telegram/webhook','App\Http\Controllers\TelegramController@Webhook');
Route::get('/', 'App\Http\Controllers\MainController@index')->name('mainPage');
Route::group(['prefix' => '/books'], function () {
    Route::get('open-{method}', 'App\Http\Controllers\MainController@openIndex')->name('index.books');
});
Route::get('/thank', 'App\Http\Controllers\MainController@create');
Route::get('/thank-you', 'App\Http\Controllers\MainController@update');







Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => '/books'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\BooksController@index');
        Route::post('/create', 'App\Http\Controllers\Admin\BooksController@create')->name('admin.book.create');
    });
    Route::group(['prefix' => '/settings'], function () {
        Route::get('/', 'App\Http\Controllers\Admin\SettingsController@index');
        Route::post('/telegram/create', 'App\Http\Controllers\Admin\SettingsController@addTelegramWebhook')->name('addTelegramWebhook');
    });

});



