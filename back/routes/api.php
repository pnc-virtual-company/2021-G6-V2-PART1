<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MyEventController;
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

Route::get('/category',[CategoryController::class, "index"]);
Route::get('/category/{id}',[CategoryController::class, "show"]);
Route::post('/category',[CategoryController::class, "store"]);
Route::put('/category/{id}',[CategoryController::class, "update"]);
Route::delete('/category/{id}',[CategoryController::class, "destroy"]);
Route::get('/category/search/{name}',[CategoryController::class, "search"]);


Route::get('/myevent',[MyEventController::class, "getEvent"]);
Route::get('/myevent/{id}',[MyEventController::class, "getOneEvent"]);
Route::post('/myevent',[MyEventController::class, "createEvent"]);
Route::put('/myevent/{id}',[MyEventController::class, "updateEvent"]);
Route::delete('/myevent/{id}',[MyEventController::class, "destroyEvent"]);


