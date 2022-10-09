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

Route::get('/', function () {
    return view('welcome');
});

// MEMBUAT ROUTE DAN ROUTE APA SAJA PADA LARAVEL 

// Route biasa 
// Route::get('/user', function() {
//     return 'User';
// });

// Route Parameter
Route::get('/admin/{id}', function($id) {
    return 'Admin ' . $id;
});

// ROUTE PARAMETER LEBIH DARI SATU 
Route::get('/user/{id}/artikel/{artikelId}', function($id, $artikelId) {
    return 'User ' . $id . " Artikel " . $artikelId;
});

// ROUTE PARAMETER OPSIONAL 
// UNTUK MEMBUAT ROUTE PARAMETER OPSIONAL 
// WAJIB MENGGUNAKAN  TANDA TANYA (?) 
Route::get('/dev/{id?}', function($id = null) {
    return 'Developer Login ' . $id;
});