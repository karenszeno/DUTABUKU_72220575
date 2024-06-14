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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\NewController;

// Route::get('/makan', [NewController::class, 'tampilkanString']);


Route::get('/', "PageController@login")->name('login');
Route::post('/login',"AuthController@ceklogin");


// Route::get('/input-gaji', [NewController::class, 'inputGaji'])->name('input_gaji');
// Route::post('/hitung-gaji', [NewController::class, 'hitungGaji'])->name('hitung_gaji');




Route::get('/logout',"AuthController@ceklogout");
Route::get('/user', "PageController@formedituser");
Route::post("/updateuser", "PageController@updateuser");
Route::get("/home","PageController@home");
Route::get("/movies","PageController@movies");
Route::get("/movies/add-form", "PageController@formaddmovies");
Route::post( "/save","PageController@savemovies");
Route::get("/movies/edit-form/{id}", "PageController@formeditmovies");
Route::put("/update/{id}","PageController@updatemovies");
Route::get("/delete/{id}", "PageController@deletemovies");

// Route::group(['middleware' => ['guest']], function () {
//     Route::get('/', "PageController@login")->name('login');
//     Route::post('/login',"AuthController@ceklogin");
// });

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/logout',"AuthController@ceklogout");
//     Route::get('/user', "PageController@formedituser");
//     Route::post("/updateuser", "PageController@updateuser");
//     Route::get("/home","PageController@home");
//     Route::get("/movies","PageController@movies");
//     Route::get("/movies/add-form", "PageController@formaddmovies");
//     Route::post( "/save","PageController@savemovies");
//     Route::get("/movies/edit-form/{id}", "PageController@formeditmovies");
//     Route::put("/update/{id}","PageController@updatemovies");
//     Route::get("/delete/{id}", "PageController@deletemovies");
// });

