<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoLectureCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class VideoLectureCategoryController extends Controller
{
    public function index()
    {
        $categories = VideoLectureCategory::get();

        return view('admin.videoLectureCategory.index',[
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.videoLectureCategory.create');

    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => '',
            'main_img' => 'image',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];

        $message =         [
            'name.required' => 'Напишіть будь ласка назву.',
            'main_img' => 'Картинка має бути у форматі (jpg,png,webp).',
            'logo' => 'Логотип має бути у форматі (jpg,png,webp).',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);

		if ($request->hasfile('main_img')) {
			$path = $request->file('main_img')->store('video-lecture-category-img', 'public');
			$data['main_img'] = '/storage/' . $path;
		}else{
			$data['main_img'] = '/video-lecture-category-img/no-image.jpg';
		}

        VideoLectureCategory::create($data);

        return redirect()->route('admin.videoLectureCategory.index');
    }

    public function show()
    {
        # code...
    }

    public function edit(VideoLectureCategory $videoCategory)
    {
        return view('admin.videoLectureCategory.edit', [
            'category' => $videoCategory,
        ]);

    }

    public function update(Request $request, VideoLectureCategory $videoCategory)
    {
        $rules = [
            'title' => 'required',
            'description' => '',
            'main_img' => 'image',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];


        $message =         [
            'title.required' => 'Напишіть будь ласка назву.',
            'main_img' => 'Картинка має бути у форматі (jpg,png,webp).',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasfile('main_img')) {
			$path = $request->file('main_img')->store('video-lecture-category-img', 'public');
			$data['main_img'] = '/storage/' . $path;

	        $path = public_path($videoCategory->main_img);
	        if (file_exists($path) && strpos($path, '/images/') === false) {
	            unlink($path);
	        }
		}

        $saved = $videoCategory->update($data);

        return redirect()->route('admin.videoLectureCategory.index');
    }

    public function delete($videoCategory)
    {
        $category = VideoLectureCategory::findOrFail($videoCategory);

        $path = public_path($category->main_img);
        if (file_exists($path) && strpos($path, '/images/') === false) {
            unlink($path);
        }

		$category->delete();

        return redirect()->route('admin.videoLectureCategory.index');
    }
}
