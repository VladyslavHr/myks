<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Trick, TrickCategory};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TrickController extends Controller
{
    public function index()
    {
        $tricks = Trick::get();

        return view('admin.trick.index',[
            'tricks' => $tricks,
        ]);
    }

    public function create()
    {
        $categories = TrickCategory::get(['id', 'title']);
        return view('admin.trick.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'trick_category_id' => 'required',
            'description' => '',
            'video' => 'required',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];

        $message =         [
            'name.required' => 'Напишіть будь ласка назву.',
            'trick_category_id.required' => 'Оберіть будь ласка категорію',
            'video.required' => 'Запишіть посилання на відео',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);

        Trick::create($data);

        return redirect()->route('admin.trick.index');
    }

    public function edit(trick $trick)
    {

        $categories = TrickCategory::get(['id', 'title']);
        return view('admin.trick.edit', [
            'trick' => $trick,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Trick $trick)
    {
        $rules = [
            'title' => 'required',
            'trick_category_id' => 'required',
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

        $data = $request->validate($rules, $message);
        $data['slug'] = Str::slug($data['title']);

        // dd($data);
        $trick->update($data);

        return redirect()->route('admin.trick.index');
    }

    public function delete($trick)
    {
        $trick = Trick::findOrFail($trick);

		$trick->delete();

        return redirect()->route('admin.trick.index');
    }
}
