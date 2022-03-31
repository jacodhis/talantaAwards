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
    return view('index');
})->name('mainPage');

Route::get('/welcomedashboard', function () {
    return view('dashboard');
});





Route::get('/vote-for-artist', function () {
    return view('index2');
})->name('app');

Route::get('/dashboard','artistController@artists')->name('dashboard');

Route::get('/artists','artistController@artists')->name('artists');
Route::get('/artist/{id}','artistController@show')->name('artist.show');
Route::get('/add-Artist','artistController@create')->name('artist.create');
Route::post('/store-Artist','artistController@store')->name('artist.store');


Route::get('/vote-HomePage','VoteController@landingPage')->name('vote');
Route::get('/votes/{artist_id}','VoteController@show')->name('vote.show');



//payment via mpesa
Route::post('pay-via-mpesa-online','MpesaController@stk')->name('stk');
Route::get('/payments', 'MpesaController@payments')->name('payments');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
