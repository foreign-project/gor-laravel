<?php

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

Route::get('/', 'LapanganController@index');

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('test',function () {
//     return view('test');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/logout', 'AuthController@logout');


Route::get('schedule', 'ScheduleCon@index' );
Route::get('schedule/getdata', 'ScheduleCon@getDataTransaksi' );


// Route::get('/login','AuthController@getLogin');
// Route::post('/login','AuthController@postLogin')->name('login');
// Route::get('/home',function() {
//     return view('tambahsewa');
// })->name('home');
// Route::get('/home','DashboardController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/tambahsewa', 'TambahSewaControll@index')->name('booking');
    Route::post('/tambahsewa/input', 'TambahSewaControll@store');
    Route::get('/tambahsewa/datalapangan', 'TambahSewaControll@dataLapangan');

    Route::get('/daftarpenyewa', 'TransaksiUserController@index');
    // Route::put('/daftarpenyewa/{transaksi}','TransaksiUserController@update');
    
});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');

        Route::get('/daftarpenyewa', 'TransaksiController@index');
        Route::delete('/daftarpenyewa/{transaksi}','TransaksiController@destroy');
        // Route::get('/daftarpenyewa/{transaksi}/edit','TransaksiController@edit');
        Route::put('/daftarpenyewa/{transaksi}','TransaksiController@update');

        Route::get('/rekap', 'RekapControll@index');
        //Route::post('/rekap/filter', 'RekapControll@filter');
        Route::get('/rekap/filter', 'RekapControll@filter');
        Route::get('/rekap/excel/{dari}/{ke}', 'RekapControll@eksporExcel')->name('excel.ekspor');
        Route::get('/rekap/getDataRekap/{dari}/{ke}', 'RekapControll@getDataRekapBulanan');

        Route::resource('user', 'UserController');
    });



Auth::routes();

