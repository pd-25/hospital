<?php

use App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [frontend::class, 'index']);
Route::get('/about-us', [frontend::class, 'AboutUs']);
Route::get('/services', [frontend::class, 'services']);


require __DIR__ . '/admin.php';

