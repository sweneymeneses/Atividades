<?php

use App\Http\Controllers\AdminAreaController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\GeneralAreaController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('general', [GeneralAreaController::class, 'index']);
Route::get('records-report', [AdminAreaController::class, 'recordsReport']);

Route::prefix('equipment')
    ->middleware('auth')
    ->group(function() {
        Route::get('/', [EquipmentController::class, 'index']);
        Route::get('/create', [EquipmentController::class, 'create']);
        Route::post('/', [EquipmentController::class, 'store']);
        Route::get('/edit/{id}', [EquipmentController::class, 'edit']);
        Route::put('/{id}', [EquipmentController::class, 'update']);
        Route::delete('/delete/{id}', [EquipmentController::class, 'destroy']);
    });
Route::resource('users', UserController::class);
Route::prefix('records')
    ->middleware('auth')
    ->group(function() {
        Route::get('/', [RecordController::class, 'index']);
        Route::get('/create', [RecordController::class, 'create']);
        Route::post('/', [RecordController::class, 'store']);
        Route::get('/edit/{id}', [RecordController::class, 'edit']);
        Route::put('/{id}', [RecordController::class, 'update']);
        Route::delete('/delete/{id}', [RecordController::class, 'destroy']);
    });

/* User and Auth*/
Route::get('signin', function() {
    return view('session.signin');
})->name('login');


Route::prefix('signup')
->group(function() {
    Route::get('/', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'signup']);
});
Route::post('/auth', [UserController::class, 'auth']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('users', [UserController::class, 'index']);
