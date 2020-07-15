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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Get All Banks
Route::get('/banks', 'BankController@getAllBanks');

//Get a Single bank Resource Record.
Route::get('/banks/{id}', 'BankController@getSingleBank');

//Create a Bank Resource
Route::post('/banks', 'BankController@createBank');

//Update a Bank Record
Route::put('/banks/{id}', 'BankController@updateBank');

//Delete a Bank Record
Route::delete('/banks/{id}', 'BankController@deleteBank');
