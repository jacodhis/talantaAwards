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
});


Route::get('/TalantaAt', function () {
    return view('backend.dashboard');
});



// Route::get('/vote-for-artist', function () {
//     return view('index2');
// })->name('app');
Route::get('/artist/{id}','artistController@show');
// Route::get('/add-Artist','artistController@create')->name('artist.create');

Route::get('/Artists', [App\Http\Livewire\Artists::class,'render'])->name('artists');


Route::get('/vote-for-artist','artistController@index')->name('vote');
Route::get('store-Artist','artistController@store')->name('artist.store');


Route::get('/payments', 'MpesaController@payments')->name('payments');

//payment via mpesa
Route::post('pay-via-mpesa-online','MpesaController@stk')->name('stk');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
