<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SumCardController;

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
    return view('sections.home');
});

Route::get('/berita', function () {
    return view('sections.berita');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/dashboard', [DashboardController::class, 'showDashboard']);
    Route::get('/get-penjualan-harian', [SumCardController::class, 'getTotalPenjualanHarian']);




    Route::get('/umkms/info', function () {
        // Retrieve the 'id' parameter from the query string
        $id = request('id');

        // Add your logic here to retrieve and display information based on the 'id'
        // For example, you can use $id to fetch data from your database

        return view('admin.umkm-info-dashboard', ['id' => $id]);
    });



    // Route::get('/umkm/info/{id}', 'UmkmInfoController@info')->name('umkm.info');


});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

Route::get('/detailproduk', [App\Http\Controllers\KatalogController::class, 'detail'])->name('detailproduk');

//temp
Route::get('/pos', function () {
    return view('admin.pos-dashboard');
});

Route::get('/umkm', function () {
    return view('admin.umkm-dashboard');
});

Route::get('/umkm/info', function () {
    return view('admin.umkm-info-dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/dashboard', [DashboardController::class, 'showDashboard']);
    Route::get('/get-penjualan-harian', [SumCardController::class, 'getTotalPenjualanHarian']);

});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

Route::get('/detailproduk', [App\Http\Controllers\KatalogController::class, 'detail'])->name('detailproduk');

//temp
Route::get('/pos', function () {
    return view('admin.pos-dashboard');
});

Route::get('/umkm', function () {
    return view('admin.umkm-dashboard');
});

Route::get('/umkm/info', function () {
    return view('admin.umkm-info-dashboard');
});
