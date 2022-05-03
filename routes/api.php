<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/login','apis\UsersController@login');
Route::post('/register','apis\UsersController@register');

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/artists','apis\ArtistController@index');
    Route::post('/logout','apis\UsersController@logout');
    Route::get('/artists/{id}','apis/ArtistsController@show');

   Route::get('/events','apis\EventsController@index');
   Route::get('/event/{id}','apis\EventsController@show');

});

Route::POST('mpesa/stkpush/response', 'MpesaController@callback');

