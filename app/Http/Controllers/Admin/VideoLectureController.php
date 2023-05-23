<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{VideoLecture, VideoLectureCategory};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VideoLectureController extends Controller
{
    public function index()
    {
        $videos = VideoLecture::get();

        return view('admin.videoLecture.index',[
            'videos' => $videos,
        ]);
    }

    public function create()
    {
        $categories = VideoLectureCategory::get(['id', 'title']);
        return view('admin.videoLecture.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'video_lecture_category_id' => 'required',
            'description' => '',
            'video' => 'required',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];

        $message =         [
            'name.required' => 'Напишіть будь ласка назву.',
            'video_lecture_category_id.required' => 'Оберіть будь ласка категорію',
            'video.required' => 'Запишіть посилання на відео',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);

        VideoLecture::create($data);

        return redirect()->route('admin.videoLecture.index');
    }

    public function show( )
    {
        # code...
    }

    public function edit(VideoLecture $video)
    {

        $categories = VideoLectureCategory::get(['id', 'title']);
        return view('admin.videoLecture.edit', [
            'video' => $video,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, VideoLecture $videoLecture)
    {
        $rules = [
            'title' => 'required',
            'video_lecture_category_id' => 'required',
            'description' => '',
            'video' => 'required',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];


        $message =         [
            'title.required' => 'Напишіть будь ласка назву.',
            'video_lecture_category_id.required' => 'Оберіть будь ласка категорію',
            'video.required' => 'Запишіть посилання на відео',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);

        $saved = $videoLecture->update($data);

        return redirect()->route('admin.videoLecture.index');
    }

    public function delete($videoLecture)
    {
        $video = VideoLecture::findOrFail($videoLecture);

		$video->delete();

        return redirect()->route('admin.videoLecture.index');
    }
}
