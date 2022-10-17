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

Route::get('/', function () {
    return view('welcome');
});
//string
Route::get('coba', function(){
    return "haloooo dek";
});
//array JSON
Route::get('coba1', function(){
    return ['rafa', 'rafi', 'rafo'];
});
//array JSON
Route::get('coba2', function(){
    return [
        'Nama' => 'Ramadhani Nuril Maulana Fatah',
        'NIS' => 3103120190,
        'Kelas' => 'XII RPL 6'
    ];
});
//array JSON
Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => 'Ramadhani Nuril Maulana Fatah',
            'NIS' => 3103120190,
            'Kelas' => 'XII RPL 6'
        ], 201
    );
});
