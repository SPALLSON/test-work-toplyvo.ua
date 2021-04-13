<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DeleteController;
use App\Models\fabric;

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
Route::get('/', [MainController::class,'home']);
Route::get('/add/api', [MainController::class,'add_api']);
Route::get('/add/fabric', [MainController::class,'add_fabric']);
Route::get('/add/medicine', [MainController::class,'add_medicine']);

Route::get('/lists', [MainController::class,'lists']);
Route::get('/add_api', [MainController::class,'api']);
Route::get('/add_fabric', [MainController::class,'fabric']);
Route::get('/add_medicine', [MainController::class,'medicine']);
Route::get('/api_info', function (){
return view('api_info');
});

///// DeleteController
Route::get('delete/{id}', [DeleteController::class,'medicines']);
Route::get('delete/api/{id}', [DeleteController::class,'api']);
Route::get('delete/fabric/{id}', [DeleteController::class,'fabric']);
