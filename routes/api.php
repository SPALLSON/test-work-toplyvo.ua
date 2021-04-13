<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::middleware('api')->get('/user', function ($id) {
    return "TEST API".$id;
});

Route::get('/medicine/list', [ApiController::class,'RestApiList']);
Route::get('/medicine/list/{id}', [ApiController::class,'RestApiListId']);
Route::delete('/medicine/list/delete/{id}', [ApiController::class,'RestApiListDelete']);

