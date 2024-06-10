<?php

use App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [frontend::class, 'Index'])->name('home');
Route::get('/about-us', [frontend::class, 'AboutUs'])->name('about');
Route::get('/services', [frontend::class, 'Services'])->name('services');
Route::get('/courses', [frontend::class, 'Courses'])->name('courses');
Route::get('/doctors', [frontend::class, 'Doctors'])->name('doctors');
Route::get('/career', [frontend::class, 'Career'])->name('career');
Route::get('/news', [frontend::class, 'News'])->name('news');
Route::get('/contact-us', [frontend::class, 'ContactUs'])->name('contact');






require __DIR__ . '/admin.php';

