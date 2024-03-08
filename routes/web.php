<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//use App\Http\Controllers\HelloController;
//Route::get('/hello',[HelloController::class, 'index']);

//Route::get('hello/{id?}/{pass?}', 'HelloController@index');
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');