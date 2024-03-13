<?php

use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ExamController::class,'index']);

Route::get('/input',[ExamController::class,'create']);
Route::post('/store',[ExamController::class,'store']);

Route::get('/{id}/edit',[ExamController::class,'edit']);
Route::put('/update/{id}',[ExamController::class,'update']);

Route::delete('/update/{id}',[ExamController::class,'destroy']);
































// Route::get('/{id}/edit',[StudentController::class,'edit']);
// Route::put('/update/{id}',[StudentController::class,'update']);

// Route::delete('/update/{id}',[StudentController::class,'destroy']);
