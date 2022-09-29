<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/*
|--------------------------------------------------------------------------
| Login and dashboard route
|--------------------------------------------------------------------------
*/
Route::post('/login',[AuthController::class,'login']);
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth:sanctum');


/*
|--------------------------------------------------------------------------
| Task create route
|--------------------------------------------------------------------------
*/
Route::resource('task',TaskController::class)->middleware('auth:sanctum');
