<?php

use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;


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

Route::post('addLoan', [DatabaseController::class, 'store'])->name('addLoan');

Route::get('{id}/edit', [DatabaseController::class, 'edit'])->name('editLoan');
Route::put('{id}/update', [DatabaseController::class, 'update'])->name('updateLoan');


Route::post('{id}/delete', [DatabaseController::class, 'destroy'])->name('deleteLoan');

Route::get('', [DatabaseController::class, 'index'])->name('index');
