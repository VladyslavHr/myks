@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <div class="row">
            @foreach ($categories as $category)
            @if (count($category->videos))
            <div class="col-lg-3">
                <a href="{{ route('videoLectureCategory.show', $category->slug) }}">
                    <h3>{{ $category->title }}</h3>
                    <div class="main-img">
                        <img class="img-width" src="{{ $category->main_img }}" alt="">
                    </div>
                    <div class="description-category">
                        {{$category->description}}
                    </div>
                </a>
            </div>
            @else
            @endif

            @endforeach
        </div>
    </div>
@endsection
