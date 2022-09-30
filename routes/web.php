<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Models\Car;


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
    $name = 'Stefan';
    $age = 23;
    return view('welcome', compact('name', 'age'));
});

Route::get('about', function () {
    return view('about');
});

// Route::get('/cars', [CarsController::class, 'index']);

Route::get('/cars', [CarsController::class, 'index']);

Route::get('/car{id}', [CarsController::class, 'show'])->name('single-car-route');

