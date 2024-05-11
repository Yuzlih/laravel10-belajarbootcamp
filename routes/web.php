<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/{var1}/{var2}', function($var1,$var2){
    $cal = $var1 * $var2;
    dd($cal);
});

Route::get('/test-controller', [HomeController::class, 'index']);
Route::get('tambah/{var1}/{var2}', [HomeController::class, 'tambah']);