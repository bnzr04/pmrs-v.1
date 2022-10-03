<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\PatientController;
use GuzzleHttp\Middleware;
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

Route::redirect('/', 'login');

Route::get('/dashboard', [ClinicController::class, 'show'], function () {
    return view('dashboard');
})->middleware(['auth', 'prevent-back-history'])->name('dashboard');

Route::middleware(['auth', 'prevent-back-history'])->group(function () {

    Route::get('/add-clinic', [ClinicController::class, 'index']);

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/tests', function () {
        return view('test');
    });

    Route::get('/patients', function () {
        return view('content.show-patients');
    });

    Route::get('/patients/{id}', [PatientController::class, 'showPatient'])->name('patient.show');
});

require __DIR__ . '/auth.php';
