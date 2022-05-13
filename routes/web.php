<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SilverController;
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





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Route::resource('form', FormController::class);
// Route::get('/', FormController::class);



Route::get('/', [FormController::class, 'create']);
Route::get('/index', [FormController::class, 'index']);
Route::post('/forms', [FormController::class, 'store'])->name('form.store');


