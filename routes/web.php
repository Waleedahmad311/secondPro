<?php

use App\Http\Controllers;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/show-number/{$id}', function ($id) {
    return $id;
})->name('a');

Route::get('/show-string', function () {
    return ('welcome');
})->name('b');

Route::group(['prefix' => 'users'],function (){

    Route::get('/', function () {
        return 'work';
    });
});
Route::get('login',function (){
    return 'login first';

})->name('login');

Route::get('/lol',[Controllers\FirstController::class,'showusername']);

Route::resource('news',NewsController::class);
Route::get('/landing', function () {
    return view('landing');
});


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
