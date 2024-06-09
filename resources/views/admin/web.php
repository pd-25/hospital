<?php

use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index'])->name('frontend.index');
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('frontend.aboutUs');
Route::get('/career', [IndexController::class, 'career'])->name('frontend.career');
Route::get('/career-list', [IndexController::class, 'careerList'])->name('frontend.careerList');
Route::post('/apply', [IndexController::class, 'apply'])->name('frontend.apply');
Route::get('/contact', [IndexController::class, 'contact'])->name('frontend.contact');
Route::get('/environmental-&-social-impact-assessment', [IndexController::class, 'envImpactService'])->name('frontend.envImpactService');
Route::get('/environmental-social-due-diligence', [IndexController::class, 'envDueService'])->name('frontend.envDueService');
Route::get('/esms-preparation-monitoring', [IndexController::class, 'esmMonitService'])->name('frontend.esmMonitService');
Route::get('/sustainability-reporting', [IndexController::class, 'susRepotService'])->name('frontend.susRepotService');
Route::get('/supply-chain-management', [IndexController::class, 'supChainService'])->name('frontend.supChainService');

Route::get('/solutions', [IndexController::class, 'solutions'])->name('frontend.solutions');
Route::get('/esg-data-management-reporting', [IndexController::class, 'ecgData'])->name('frontend.ecgData');
Route::get('/environment-social-screening', [IndexController::class, 'envScreen'])->name('frontend.envScreen');
Route::get('/resettlement-action-plan-framework', [IndexController::class, 'resetPlan'])->name('frontend.resetPlan');

Route::get('/blogs/{slug?}', [IndexController::class, 'blogs'])->name('frontend.blogs');
Route::get('/case-studies/{slug?}', [IndexController::class, 'caseStudy'])->name('frontend.caseStudy');
Route::get('/news-events/{slug?}', [IndexController::class, 'news'])->name('frontend.news');

require __DIR__ . '/admin.php';
