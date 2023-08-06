<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'showData'])->name('ShowUserData');
Route::get('/show-data', [UserController::class, 'showsDatas'])->name('ShowsUserData');
Route::get('/save-data', [UserController::class, 'saveData'])->name('SaveUserData');
Route::get('/update-data', [UserController::class, 'updateData'])->name('UpdateUserData');
Route::get('/delete-data', [UserController::class, 'deleteData'])->name('DeleteUserData');
