<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('create');
});

Route::get('wel', function () {
    return view('welcome');
});


Route::post('register', [UserController::class, 'Createuser']);
Route::any('edit/{id}', [UserController::class, 'Edituser']);
Route::any('delete/{id}', [UserController::class, 'Deleteuser']);
Route::any('update/{id}', [UserController::class, 'updateuser']);
Route::get('view', [UserController::class, 'Getuser']);

