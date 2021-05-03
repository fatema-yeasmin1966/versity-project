<?php

use App\Http\Controllers;


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
require __DIR__.'/auth.php';

Route::get('/', [Controllers\FrontendController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function (){
    Route::get('profile', [Controllers\ProfileController::class, 'index'])->name('profile');
    Route::post('profile', [Controllers\ProfileController::class, 'update'])->name('profileUpdate');

    Route::group(['middleware' => 'doctor', 'as' => 'doctor.', 'prefix' => 'backend/doctor/'], function (){
        Route::get('dashboard', [Controllers\Doctor\DashboardController::class, 'index'])->name('dashboard');
    });

    Route::group(['middleware' => 'admin', 'as' => 'admin.', 'prefix' => 'backend/admin/'], function (){
        Route::get('dashboard', [Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    });
});






