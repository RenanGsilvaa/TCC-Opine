<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController;
use App\Models\User;
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

Route::get('/', [UseController::class, 'index']);

Route::get('/users/create', [UseController::class, 'create']);
