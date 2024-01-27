<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    public function index() {

        $categories = PostCategory::get();

        return view('admin.postCategory.index',[
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.postCategory.create');

    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => '',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];

        $message =         [
            'title.required' => 'Напишіть будь ласка назву.',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        PostCategory::create($data);

        return redirect()->route('admin.postCategory.index');
    }

    public function show()
    {
        # code...
    }

    public function edit(PostCategory $postCategory)
    {
        return view('admin.postCategory.edit', [
            'category' => $postCategory,
        ]);

    }

    public function update(Request $request, PostCategory $postCategory)
    {
        $rules = [
            'title' => 'required',
            'description' => '',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];


        $message =         [
            'title.required' => 'Напишіть будь ласка назву.',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        $saved = $postCategory->update($data);

        return redirect()->route('admin.postCategory.index');
    }

    public function delete($postCategory)
    {
        $category = PostCategory::findOrFail($postCategory);

		$category->delete();

        return redirect()->route('admin.postCategory.index');
    }
}
