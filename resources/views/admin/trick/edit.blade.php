@extends('admin.layouts.adminapp')

@section('page-title', 'Редагування короткого відео')

@section('content')
@include('admin.layouts.blocks.errors')
<div class="container py-3">
    <div class="row py-3">
        <div class="col-md-2">
            <a class="btn " href="{{ route('admin.trick.index') }}">
                <i class="bi bi-arrow-left-square me-2"></i>
                Повернутись
            </a>
        </div>
        <div class="col-md-2">
            <a class="btn " href="{{ route('admin.trick.create') }}">
                <i class="bi bi-plus-lg me-2"></i>
                Створити
            </a>
        </div>
        <div class="col-md-2">
            <form class="text-center" action="{{ route('admin.trick.delete', $trick) }}" method="POST"
            onsubmit="if(!confirm('Видалити?')) return false">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn"><i class="bi bi-trash me-2"></i> Видалити</button>
        </form>
        </div>
    </div>
    <form class="mt-3" action="{{ route('admin.trick.update', $trick) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-md-4">
                <label for="" class="form-label">Назва відео</label>
                <input name="title" value="{{ $trick->title }}" type="text" class="form-control" id="">
                <span class="form-text">Будь ласка напишіть назву відео.</span>
            </div>
            <div class="mb-3 col-md-4">
                <label for="" class="form-label">Посилання на відео</label>
                <input name="video" value="{{ $trick->video }}" type="text" class="form-control" id="">
                <span class="form-text">https://www.youtube.com/watch?v=MrgrJ9ILjJk (потрібно ввести тільки ті символи що після дорівнє MrgrJ9ILjJk)</span>
            </div>
            <div class="mb-3 col-md-4">
                <span class="form-text">Оберіть будь ласка категорію.</span>
                <span class="form-text">Обрана категорія</span>
                <label for="">{{ $trick->category->title }}</label>
                <select class="form-select" name="trick_category_id" >
                    @foreach ($categories as $category)
                        <option {{ $category->id == $trick->category->id ? 'selected' : '' }} value="{{$category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <span class="form-text">Будь ласка оберіть до якої категорії належить товар.(обов'язково)</span>
            </div>
            <div class="mb-3 col-md-12">
                <label for="description_product_category_create" class="form-label">Опис</label>
                <textarea name="description" class="form-control tinyeditor" id="description_product_category_create" cols="30" rows="10"
                >{{ $trick->description }}</textarea>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO заголовок</label>
                <input name="seo_title" value="{{ $trick->seo_title }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO заголовок.</span>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO ключові слова</label>
                <input name="seo_keywords" value="{{ $trick->seo_keywords }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO ключові слова.</span>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">SEO опис</label>
                <input name="seo_description" value="{{ $trick->seo_description }}" type="text" class="form-control" id="" placeholder="">
                <span class="form-text">Будь ласка напишіть SEO опис.</span>
            </div>
        </div>
        <button type="submit" class="btn btn-primary col-md-1" >Змінити</button>
    </form>
</div>

@endsection
