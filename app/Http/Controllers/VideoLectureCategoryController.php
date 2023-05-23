<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoLectureCategory;

class VideoLectureCategoryController extends Controller
{
    public function index()
    {
        $categories = VideoLectureCategory::get();

        // dd($categories->videos);
        return view('videoLectureCategory.index',[
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {
        $category = VideoLectureCategory::where('slug', $slug)->first();

        // dd(count($category->videos));
        $videos = $category->videos;
// dd(count($videos));

        return view('videoLectureCategory.show', [
            'videos' => $videos,
            'category' => $category,
        ]);
    }
}
