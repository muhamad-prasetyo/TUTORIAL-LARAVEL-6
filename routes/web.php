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
Route::get('/devs/{id?}', function($id = null) {
    return 'Developer Login ' . $id;
});



////////////// MEMBUAT ROUTE GROUP  //////////////////////
// Route Group Default dengan prefix
Route::prefix('user')->group(function() {
    // definisikan Route 
    Route::get('/change-password', function() {
        return 'Change Password';
    });
    
    Route::get('/profile', function() {
        return 'Profile';
    });
    
    Route::get('/photo', function() {
        return 'Photo';
    });
});



// Route Group dengan Tambahan Middleware auth 
Route::get('/login', function() {
    return 'Login Dahalu yak....';
})->name('login');

Route::prefix('dev')->middleware('auth')->group(function() {
    // Definisikan Route
    Route::get('/absen', function() {
        return 'Absensi Developer';
    });

    Route::get('/data', function() {
        return 'Basis Data Accunting';
    });

    Route::get('/audit', function() {
        return 'Audit Data Barang';
    });
});



// Route Group didalam Route Group
Route::prefix('account')->group(function() {
    // definisikan Route Group lainnya
    Route::prefix('setting')->group(function() {
        // Definisikan Route 
        Route::get('/change-password', function() {
            return 'Change-Password';
        });

        Route::get('/email', function() {
            return 'Email';
        });

        Route::get('/photo', function() {
            return 'Photo';
        });
    });

    // Route diluar Route Group lainnya
    Route::get('follower', function() {
        return 'Follower';
    });
});
 jndjnsdjnsdjnj