<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncidentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PermutationController;


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
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin']);


Route::get('/users/{userId}/modification', [UserController::class, 'modification'])->name('users.modification')->middleware(  'auth');

Route::patch('/users/updatePassword/{userId}', [UserController::class, 'updatePassword'])->name('updatePassword')->middleware('auth');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',



Route::middleware(['auth', 'firstLogin'])->group(function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::controller(PermissionController::class)->group(function () {
        Route::get('/permissions', 'index')->name('permissions.index');
        Route::get('/permissions/create', 'create')->name('permissions.create');
        Route::get('/permissions/{id}', 'show')->name('permissions.show');
        Route::get('/permissions/{id}/edit', 'edit');


        Route::post('/permissions', 'store')->name('permissions.store');
        Route::patch('/permissions/{id}', 'update');
        Route::delete('/permissions/{id}', 'destroy');
        Route::get('/permissions/detail/{id}', 'detail')->name('permissions.detail');
    });

    Route::controller(PermutationController::class)->group(function() {
        Route::get('/permutations', 'index')->name('permutations.index');
        Route::get('/permutations/create', 'create')->name('permutations.create');
        Route::post('/permutations', 'store')->name('permutations.store');
        Route::patch('/permutations/{id}', 'update');
        Route::delete('/permutations/{id}', 'destroy');
        Route::get('/permutations/{userId}', 'show')->name('permutations.show');
        Route::get('/permutations/detail/{id}', 'detail' )->name('permutations.detail');
    });

    Route::controller(IncidentController::class)->group(function() {
        Route::get('/incidents/', 'index')->name('incidents.index');
        Route::get('/incidents/create', 'create')->name('incidents.create');
        Route::post('/incidents/store','store')->name('incidents.store');
        Route::get('/incidents/{id}','show')->name('incidents.show');
        Route::patch('/incidents/{id}', 'update')->name('incidents.update');
        Route::get('/incidents/{id}/updateTime', 'updateTime')->name('incidents.updateTime');

    });

});


Route::middleware(['auth','firstLogin', 'checkRole'])->group(function () {
    Route::controller(UserController::class)->group(function() {
        Route::get('/users',  'index')->name('users.index');
        Route::get('/users/create', 'create');
        Route::get('/users/{id}', 'show');
        Route::get('/users/{id}/edit', 'edit')->name('users.edit');
        Route::post('/users','store');
        Route::patch('/users/{id}', 'update');
        Route::delete('/users/{id}', 'destroy');
        Route::get('/arrangement', 'allPermutation')->name('arrangement');
        Route::get('/arrangement/{id}', 'voir')->name('voir');
        Route::get('/demande','allPermission')->name('demande');
        Route::get('/demande/{id}', 'validation')->name('validation');
        Route::get('/declaration', 'declarer')->name('users.declarer');

    });
});



