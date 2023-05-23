<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\VideoLectureCategoryController as VideoLectureCategoryController;
use App\Http\Controllers\Admin\VideoLectureController as VideoLectureController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/videoLectureCategory', [App\Http\Controllers\VideoLectureCategoryController::class, 'index'])->name('videoLectureCategory.index');
Route::get('/videoLectureCategory/{slug}', [App\Http\Controllers\VideoLectureCategoryController::class, 'show'])->name('videoLectureCategory.show');




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

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
