<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrickCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TrickCategoryController extends Controller
{
    public function index()
    {
        $categories = TrickCategory::get();

        return view('admin.trickCategory.index',[
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.trickCategory.create');

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
			$path = $request->file('main_img')->store('trick-category-img', 'public');
			$data['main_img'] = '/storage/' . $path;
		}else{
			$data['main_img'] = '/no-img/no-image.webp';
		}

        TrickCategory::create($data);

        return redirect()->route('admin.trickCategory.index');
    }

    public function show()
    {
        # code...
    }

    public function edit(TrickCategory $trickCategory)
    {
        return view('admin.trickCategory.edit', [
            'category' => $trickCategory,
        ]);

    }

    public function update(Request $request, TrickCategory $trickCategory)
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
			$path = $request->file('main_img')->store('trick-category-img', 'public');
			$data['main_img'] = '/storage/' . $path;

	        $path = public_path($trickCategory->main_img);
	        if (file_exists($path) && strpos($path, '/images/') === false) {
	            unlink($path);
	        }
		}

        $saved = $trickCategory->update($data);

        return redirect()->route('admin.trickCategory.index');
    }

    public function delete($trickCategory)
    {
        $category = TrickCategory::findOrFail($trickCategory);

        $path = public_path($category->main_img);
        if (file_exists($path) && strpos($path, '/images/') === false) {
            unlink($path);
        }

		$category->delete();

        return redirect()->route('admin.trickCategory.index');
    }
}
