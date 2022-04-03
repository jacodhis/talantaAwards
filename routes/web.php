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





// Route::get('/vote-for-artist', function () {
//     return view('index2');
// })->name('app');


// Route::get('/artists','artistController@artists')->name('artists');
// Route::get('/artist/{id}','artistController@show')->name('artist.show');
// Route::get('/add-Artist/{eventId}','artistController@create')->name('artist.create');
// Route::post('/store-Artist','artistController@store')->name('artist.store');


Route::get('/vote-HomePage','VoteController@landingPage')->name('vote');
Route::get('/votes/{artist_id}','VoteController@show')->name('vote.show');


//payment via mpesa
Route::post('pay-via-mpesa-online','MpesaController@stk')->name('stk');

Route::group(['middleware' => ['auth','Admin']],function(){

    Route::get('/artists','artistController@artists')->name('artists');
    Route::get('/artist/{id}','artistController@show')->name('artist.show');
    Route::get('/add-Artist/{eventId}','artistController@create')->name('artist.create');
    Route::post('/store-Artist','artistController@store')->name('artist.store');

    Route::get('/events','eventsController@index')->name('events');
    Route::get('/payments', 'MpesaController@payments')->name('payments');
    //admins
    Route::get('/admins', 'UsersController@index')->name('admins');
    Route::get('/admins/create-admin', 'UsersController@create')->name('create.admin');
    Route::post('/store-Admin','UsersController@store')->name('admin.store');




});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
