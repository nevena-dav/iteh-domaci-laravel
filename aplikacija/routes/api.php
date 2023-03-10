<?php

use App\Http\Controllers\AutentifikacijaControler;
use App\Http\Controllers\ProizvodController;
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

Route::get('/proizvodi',[ProizvodController::class,'index']);
Route::get('/proizvodi/{id}',[ProizvodController::class,'show']);



Route::post('/register',[AutentifikacijaControler::class,'register']);
Route::post('/login',[AutentifikacijaControler::class,'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout',[AutentifikacijaControler::class,'logout']);
 
    Route::post('/proizvodi',[ProizvodController::class,'store']);
    Route::put('/proizvodi/{id}',[ProizvodController::class,'update']);
    Route::delete('/proizvodi/{id}',[ProizvodController::class,'destroy']);
    
});

 