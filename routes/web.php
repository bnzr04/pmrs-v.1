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
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/clinics', [ClinicController::class, 'show'])->middleware(['auth'])->name('clinics');

Route::get('/add-clinic', [ClinicController::class, 'index'])->middleware(['auth']);

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth']);

// Route::get('/clinic/{id}',)
