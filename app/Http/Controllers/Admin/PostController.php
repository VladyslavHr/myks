<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() {

        $posts = Post::get();

        return view('admin.post.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $categories = PostCategory::get(['id', 'title']);
        return view('admin.post.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'post_category_id' => 'required',
            'iamge' => 'image',
            'text' => '',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];

        $message =         [
            'title.required' => 'Напишіть будь ласка назву.',
            'post_category_id.required' => 'Оберіть будь ласка категорію',
            'iamge' => 'Картинка має бути у форматі (jpg,png,webp).',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        if ($request->hasfile('image')) {
			$path = $request->file('image')->store('post-img', 'public');
			$data['image'] = '/storage/' . $path;
		}else{
			$data['image'] = '/no-img/no-image.webp';
		}

        Post::create($data);

        return redirect()->route('admin.post.index');
    }

    public function show()
    {
        # code...
    }

    public function edit(Post $post)
    {
        $categories = PostCategory::get(['id', 'title']);

        return view('admin.post.edit', [
            'post' => $post,
            'categories' => $categories,
        ]);

    }

    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required',
            'post_category_id' => 'required',
            'iamge' => 'image',
            'text' => '',
            'seo_title' => '',
            'seo_keywords' => '',
            'seo_description' => '',
		];


        $message =         [
            'title.required' => 'Напишіть будь ласка назву.',
            'post_category_id.required' => 'Оберіть будь ласка категорію',
            'iamge' => 'Картинка має бути у форматі (jpg,png,webp).',
            'seo_title.required' => 'Напишіть будь ласка заголовок для SEO .',
            'seo_keywords.required' => 'Напишіть будь ласка ключові слова для SEO.',
            'seo_description.required' => 'Напишіть будь ласка опис для SEO.',
        ];

        $data = $request->validate($rules, $message, );
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = auth()->user()->id;

        if ($request->hasfile('image')) {
			$path = $request->file('image')->store('post-img', 'public');
			$data['image'] = '/storage/' . $path;

	        $path = public_path($post->image);
	        if (file_exists($path) && strpos($path, '/images/') === false) {
	            unlink($path);
	        }
		}

        $saved = $post->update($data);

        return redirect()->route('admin.post.index');
    }

    public function delete($post)
    {
        $post = Post::findOrFail($post);

		$post->delete();

        return redirect()->route('admin.post.index');
    }
}
