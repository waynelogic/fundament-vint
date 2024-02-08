<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

//Route::get('/', function () {
//    return view('home');
//});


Route::any('/test', function () {
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA',
    ]);
});

Route::any('{slug?}', Controllers\PageController::class)
    ->where('slug', '(.*)?');
