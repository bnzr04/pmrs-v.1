<?php

use App\Http\Controllers\ClinicController;
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

    Route::get('/show-clinic', function () {
        return view('content.show-clinic');
    });

    Route::get('/show-clinic/{id}', [ClinicController::class, 'showClinic'])->name('clinic.show');
});

require __DIR__ . '/auth.php';
