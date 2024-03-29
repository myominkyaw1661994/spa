<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('product', 'ProductController@index');
// Route::post('product', 'ProductController@store');
// Route::get('product/{id}', 'ProductController@show');
// Route::put('product/{id}', 'ProductController@update');
// Route::delete('product/{id}', 'ProductController@destroy');


Route::apiResource('product', ProductController::class);