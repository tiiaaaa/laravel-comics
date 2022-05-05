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

// Route::get('/', function () {
//     return view('welcome');
// });

// Percorso URl che porta alla homepage
Route::get('/', function () {
    return view('layouts.base');
});


Route::get('/products', function () {
    $data = config('comics');
    return view('guest.products', ['comics' => $data]);
});


Route::get('/products/{index}', function ($index) {
    $cardList = config('comics');
    if(is_numeric($index) && $index >= 0 && $index < count($cardList)){
        return view('guest.detail', ['card' => $cardList[$index]]);
    }else{
        abort(404);
    }
})->name('guest-detail');


