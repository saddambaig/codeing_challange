<?php

use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\HomeController;              

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
Route::post('/send-request',[HomeController::class,'sendRequest']);
Route::post('/delete-request',[HomeController::class,'deleteRequest']);
Route::post('/accept-request',[HomeController::class,'acceptRequest']);
Route::get('/get-suggestions',[HomeController::class,'getSuggestions']);
Route::get('/get-sent-requests',[HomeController::class,'getsentRequests']);
Route::get('/get-receive-requests',[HomeController::class,'getReceivedRequests']);
Route::get('/get-connection',[HomeController::class,'getConnections']);