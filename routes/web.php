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

Route::get('/home', function () {
    return view('belajar');
});
// Route::get('/belajar', function () {
//     return view('belajar');
// });
Route::get('/belajar2', function () {
    return view('belajar2');
});
Route::get('/', function () {
    return view('welcome');
});
