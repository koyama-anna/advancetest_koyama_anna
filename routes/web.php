<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;


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

Route::get('/', [FormController::class, 'contact']);
Route::get('/confirm', [FormController::class, 'confirm']);
Route::post('/confirm', [FormController::class, 'confirm']);
Route::get('/send', [FormController::class, 'send']);
Route::post('/send', [FormController::class, 'send']);
Route::get('/system', [FormController::class, 'system']);
Route::get('/search', [FormController::class, 'search']);
Route::post('/search', [FormController::class, 'search']);
Route::get('/remove', [FormController::class, 'remove']);
Route::post('/remove', [FormController::class, 'remove']);
