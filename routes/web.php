<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\VideoLectureCategoryController as VideoLectureCategoryController;
use App\Http\Controllers\Admin\VideoLectureController as VideoLectureController;
use App\Http\Controllers\Admin\TrickController as TrickController;
use App\Http\Controllers\Admin\TrickCategoryController as TrickCategoryController;
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
Route::get('/sitemap.xml', [App\Http\Controllers\Controller::class, 'sitemap'])->name('sitemap');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('o-nas', [App\Http\Controllers\HomeController::class, 'companyInfo'])->name('home.companyInfo');

// Video Lecture
Route::get('/video-lekce', [App\Http\Controllers\VideoLectureCategoryController::class, 'index'])->name('videoLectureCategory.index');
Route::get('/video-lekce/{slug}', [App\Http\Controllers\VideoLectureCategoryController::class, 'show'])->name('videoLectureCategory.show');

// Tricks
Route::get('triky', [App\Http\Controllers\TrickController::class, 'index'])->name('trick.index');

// Contact
Route::get('kontakt', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('kontakt/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {

    // Dashboard
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');

    // Video Lecture Category
    Route::get('/video-category', [VideoLectureCategoryController::class, 'index'])->name('admin.videoLectureCategory.index');
    Route::get('/video-category/create', [VideoLectureCategoryController::class, 'create'])->name('admin.videoLectureCategory.create');
    Route::get('/video-category/edit/{video_category}', [VideoLectureCategoryController::class, 'edit'])->name('admin.videoLectureCategory.edit');
    Route::post('/video-category/store', [VideoLectureCategoryController::class, 'store'])->name('admin.videoLectureCategory.store');
    Route::post('/video-category/update/{video_category}', [VideoLectureCategoryController::class, 'update'])->name('admin.videoLectureCategory.update');
    Route::delete('/video-category/delete/{video_category}', [VideoLectureCategoryController::class, 'delete'])->name('admin.videoLectureCategory.delete');

    // Video Lecture
    Route::get('/video', [VideoLectureController::class, 'index'])->name('admin.videoLecture.index');
    Route::get('/video/create', [VideoLectureController::class, 'create'])->name('admin.videoLecture.create');
    Route::get('/video/edit/{video}', [VideoLectureController::class, 'edit'])->name('admin.videoLecture.edit');
    Route::post('/video/store', [VideoLectureController::class, 'store'])->name('admin.videoLecture.store');
    Route::post('/video/update/{video}', [VideoLectureController::class, 'update'])->name('admin.videoLecture.update');
    Route::delete('/video/delete/{video}', [VideoLectureController::class, 'delete'])->name('admin.videoLecture.delete');

    // Trick Category
    Route::get('/tric-category', [TrickCategoryController::class, 'index'])->name('admin.trickCategory.index');
    Route::get('/tric-category/create', [TrickCategoryController::class, 'create'])->name('admin.trickCategory.create');
    Route::get('/tric-category/edit/{trickCategory}', [TrickCategoryController::class, 'edit'])->name('admin.trickCategory.edit');
    Route::post('/tric-category/store', [TrickCategoryController::class, 'store'])->name('admin.trickCategory.store');
    Route::post('/tric-category/update/{trickCategory}', [TrickCategoryController::class, 'update'])->name('admin.trickCategory.update');
    Route::delete('/tric-category/delete/{trickCategory}', [TrickCategoryController::class, 'delete'])->name('admin.trickCategory.delete');

    // Trick
    Route::get('/trick', [TrickController::class, 'index'])->name('admin.trick.index');
    Route::get('/trick/create', [TrickController::class, 'create'])->name('admin.trick.create');
    Route::get('/trick/edit/{trick}', [TrickController::class, 'edit'])->name('admin.trick.edit');
    Route::post('/trick/store', [TrickController::class, 'store'])->name('admin.trick.store');
    Route::post('/trick/update/{trick}', [TrickController::class, 'update'])->name('admin.trick.update');
    Route::delete('/trick/delete/{trick}', [TrickController::class, 'delete'])->name('admin.trick.delete');
});

Auth::routes();



