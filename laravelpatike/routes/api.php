<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\BrendController;
use App\Http\Controllers\BrendPatikaController;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\PatikaController;
use App\Http\Controllers\UserController;
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

Route::get('/users', [UserController::class,'index']);
Route::get('/users/{id}', [UserController::class,'show']);


Route::get('/kategorije', [KategorijaController::class,'index']);
Route::get('/kategorija/{kategorija}', [KategorijaController::class,'show']);

Route::get('/brendovi', [BrendController::class,'index']);
Route::get('/brendovi/{brend}', [BrendController::class,'show']);

Route::get('/patike', [PatikaController::class,'index']);
Route::get('/patikeOdredjenogBrenda/{id}', [BrendPatikaController::class,'index']);

Route::delete('/kategorija/{id}', [KategorijaController::class, 'destroy']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });
    Route::put('patike/{id}', [PatikaController::class, 'update']);
    Route::delete('patike/{id}', [PatikaController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

