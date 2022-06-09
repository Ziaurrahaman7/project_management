<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SupportController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::middleware('auth')->group(function () {
    Route::resource('team', TeamController::class);
    Route::resource('client', ClientController::class);
    Route::resource('lead', LeadsController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('leavetype', LeaveTypeController::class);
    Route::resource('leave', LeaveController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('support', SupportController::class);
});
