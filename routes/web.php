<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class,'login'])->name('login');

Route::post('/saveTaskRoute', [ TaskController :: class ,'store'])->name('saveTask');

Route::post('/updateStatusRoute/{id}', [ TaskController :: class ,'updateStatus'])->name('updateStatus');

Route::get('/displayCreateForm', [ TaskController :: class ,'create'])->name('displayCreateTask');

Route::post('/displayEditTask/{id}', [ TaskController :: class ,'edit'])->name('displayEditTask');

Route::post('/handleUpdate/{id}', [ TaskController :: class ,'update'])->name('handleUpdate');

// Route::get('/login',[TaskController::class,'login'])->name('login');



Route::post('/authenticate',[TaskController::class,'userAuthentication'])->name('authenticate');

    Route::group(['middleware'=>'admin.guest'],function(){
        Route::get('/login',[TaskController::class,'login'])->name('login');
    });

    Route::group(['middleware'=>'admin.auth'],function(){

});