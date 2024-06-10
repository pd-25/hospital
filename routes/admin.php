<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\blog\BlogController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\casestudy\CaseStudyController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\doctor\DoctorCOnteoller;
use App\Http\Controllers\admin\news\NewsController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/jobs', CareerController::class);
    Route::get('/applications', [CareerController::class, 'getApplication'])->name('admin.getApplication');
    Route::delete('/applications/{slug}', [CareerController::class, 'deleteApplication'])->name('admin.deleteApplication');
    Route::resource('news-events', NewsController::class);
    // Route::resource('blogs', BlogController::class);
    Route::resource('doctors', DoctorCOnteoller::class);
    Route::resource('galleries', GalleryController::class);
    // Route::resource('case-studies', CaseStudyController::class);

    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
});