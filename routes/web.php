<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/no', function () {
    return view('no');
});

Route::get('/accounts', function () {
    return view('accounts');
});

Route::get('/app', function () {
    return view('app');
});


Route::post('/no', [Controller::class, 'signUp']);

Route::get('/logout', [Controller::class, 'logOut']);

Route::get('/accounts', [Controller::class, 'showAll']);

Route::post('/accounts', [Controller::class, 'login']);

Route::post('/app', [Controller::class, 'login']);

Route::post('/app', [Controller::class, 'showEdit']);

