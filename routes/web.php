<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LogFilesController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/contact/create', [ContactController::class, 'create']);
    Route::post('/contact', [ContactController::class, 'store']);
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit']);
    Route::get('/contact/{id}/detail', [ContactController::class, 'detail']);
    Route::get('/contact/{id}/assign', [ContactController::class, 'assign']);
    Route::put('/contact/{id}', [ContactController::class, 'update']);
    Route::get('contact/{id}/destroy', [ContactController::class, 'destroy']);

    Route::get('/agent', [AgentController::class, 'index']);
    Route::get('/agent/{id}/edit', [AgentController::class, 'edit']);
    Route::put('/agent/{id}', [AgentController::class, 'update']);
    Route::get('/agent/{id}/remarks', [AgentController::class, 'remarks']);
    Route::put('/agent/{id}/addRemarks', [AgentController::class, 'addRemarks']);

    Route::get('/log-files', [LogFilesController::class, 'index']);
    Route::get('/log-files/{filename}', [LogFilesController::class, 'show']);

});
