<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('list','list');
Route::get('list',[StudentsController::class,'show']);
Route::view('stuadd','addstudent');
Route::post('stuadd',[StudentsController::class,'addData']);
Route::get('delete/{id}',[StudentsController::class,'delete']);
Route::get('delete',[StudentsController::class,'delete']);
Route::get('edit/{id}',[StudentsController::class,'showData']);
Route::post('edit',[StudentsController::class,'update']);
