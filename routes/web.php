<?php

use App\Events\WebSocketEvent;
use App\Http\Controllers\ChatController;
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
    // broadcast(new WebSocketEvent('esraa'));
    return view('welcome');
});
Route::resource('chat', 'ChatController', [

    'names' => [
        'create' => 'chatpage',
        'index' => 'messages'
    ]
])->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
