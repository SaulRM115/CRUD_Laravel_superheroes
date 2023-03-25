<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\heroesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Define a Route responding to HTTP GET request
Route::get('/', function () {
    // return the view "welcome"
    return view('welcome');
});

// Define a RESTful Resource Controller for the root URL path('/')
Route::resource('heroes', heroesController::class);




