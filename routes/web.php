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

Route::get('/', function () {
    return view('welcome');
});
Route::get('user/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);
// Update user
// Nhớ là phải truyền thêm id để biết được đối tượng muốn sửa nhé
Route::get('/user/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);