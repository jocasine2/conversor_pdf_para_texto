<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DogController;


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

// Route::apiResource('conversor','App\Http\Controllers\api\DogController');
Route::get('conversor', [DogController::class, 'index'])->name('conversor.index');
Route::post('conversor/pdftotext', [DogController::class, 'pdftotext'])->name('conversor.pdftotext');
