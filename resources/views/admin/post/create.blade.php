@extends('admin.layouts.adminapp')

@section('content')
<div class="container py-3">
    <div class="row py-3">
        <div class="col-md-2">
            <a class="btn " href="{{ route('admin.post.index') }}">
                <i class="bi bi-arrow-left-square me-2"></i>
                Повернутись
            </a>
        </div>
    </div>
    <form class="mt-3" action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Назва відео</label>
                <input name="title" value="{{ old('title') }}" type="text" class="form-control" id="">
                <span class="form-text">Будь ласка напишіть назву відео.</span>
            </div>
            <div class="mb-3 col-md-6">
                <span class="form-text">Оберіть будь ласка категорію блогу.</span>
                <select class="form-select" name="post_category_id" >
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <span class="form-text">Будь ласка оберіть до якої категорії належить блог.(обов'язково)</span>
            </div>
            <div class="mb-3 col-md-12">
                <label for="text_create" class="form-label">Опис</label>
                <textarea name="text" class="form-control tinyeditor" id="text_create" cols="30" rows="10"
                >{{ old('text') }}</textarea>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO заголовок</label>
                <input name="seo_title" value="{{ old('seo_title') }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO заголовок.</span>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO ключові слова</label>
                <input name="seo_keywords" value="{{ old('seo_keywords') }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO ключові слова.</span>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO опис</label>
                <input name="seo_description" value="{{ old('seo_description') }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO опис.</span>
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Картинка</label>
                <input name="image" type="file" class="form-control" id="inputMainImgFile">
            </div>
        </div>
        <button type="submit" class="btn btn-primary col-md-1" >Створити</button>
    </form>
</div>
@endsection
