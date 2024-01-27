@extends('admin.layouts.adminapp')

@section('page-title', 'Редагування Блогу')

@section('content')
@include('admin.layouts.blocks.errors')
<div class="container py-3">
    <div class="row py-3">
        <div class="col-md-2">
            <a class="btn " href="{{ route('admin.post.index') }}">
                <i class="bi bi-arrow-left-square me-2"></i>
                Повернутись
            </a>
        </div>
        <div class="col-md-2">
            <a class="btn " href="{{ route('admin.post.create') }}">
                <i class="bi bi-plus-lg me-2"></i>
                Створити
            </a>
        </div>
        <div class="col-md-2">
            <form class="text-center" action="{{ route('admin.post.delete', $post) }}" method="POST"
            onsubmit="if(!confirm('Видалити?')) return false">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn"><i class="bi bi-trash me-2"></i> Видалити</button>
        </form>
        </div>
    </div>
    <form class="mt-3" action="{{ route('admin.post.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Назва відео</label>
                <input name="title" value="{{ $post->title }}" type="text" class="form-control" id="">
                <span class="form-text">Будь ласка напишіть назву відео.</span>
            </div>
            <div class="mb-3 col-md-6">
                <span class="form-text">Оберіть будь ласка категорію.</span>
                <span class="form-text">Обрана категорія</span>
                <label for="">{{ $post->category->title }}</label>
                <select class="form-select" name="post_category_id" >
                    @foreach ($categories as $category)
                        <option {{ $category->id == $post->category->id ? 'selected' : '' }} value="{{$category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <span class="form-text">Будь ласка оберіть до якої категорії належить блог.(обов'язково)</span>
            </div>
            <div class="mb-3 col-md-12">
                <label for="text_create" class="form-label">Опис</label>
                <textarea name="text" class="form-control tinyeditor" id="text_create" cols="30" rows="10"
                >{{ $post->text }}</textarea>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO заголовок</label>
                <input name="seo_title" value="{{ $post->seo_title }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO заголовок.</span>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO ключові слова</label>
                <input name="seo_keywords" value="{{ $post->seo_keywords }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO ключові слова.</span>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO опис</label>
                <input name="seo_description" value="{{ $post->seo_description }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO опис.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Картинка</label>
                <input name="image" type="file" class="form-control" id="inputMainImgFile">
            </div>
            <div class="mb-3 col-md-3">
                <span>Картинка</span>
                <img style="width: 100%" src="{{ $post->image }}" alt="">
            </div>
        </div>
        <button type="submit" class="btn btn-primary col-md-1" >Змінити</button>
    </form>
</div>

@endsection
