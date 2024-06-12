<?php

use App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('optimize', function () {

    \Artisan::call('optimize:clear');

    dd("optimize is cleared");

});

Route::get('storage', function () {

    \Artisan::call('storage:link');

    dd("storage is link");

});

Route::get('/', [frontend::class, 'Index'])->name('home');
Route::get('/about-us', [frontend::class, 'AboutUs'])->name('about');
Route::get('/services', [frontend::class, 'Services'])->name('services');
Route::get('/courses', [frontend::class, 'Courses'])->name('courses');
Route::get('/doctors', [frontend::class, 'Doctors'])->name('doctors');
Route::get('/career', [frontend::class, 'Career'])->name('career');
Route::get('/career/{slug}', [frontend::class, 'CareerSingle'])->name('CareerSingle');
Route::post('/application/{job_id}', [frontend::class, 'Careerapplication'])->name('Careerapplication');
Route::get('/news', [frontend::class, 'News'])->name('news');
Route::get('/news/{slug}', [frontend::class, 'newsSingle'])->name('newsSingle');

Route::get('/contact-us', [frontend::class, 'ContactUs'])->name('contact');
Route::post('/contact', [frontend::class, 'contactPost'])->name('frontend.contactPost');






require __DIR__ . '/admin.php';

