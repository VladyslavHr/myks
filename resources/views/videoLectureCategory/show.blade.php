@extends('layouts.app')
@section('title', $category->seo_title)
@section('description', $category->seo_description)
@section('keywords', $category->seo_keywords)

@section('content')
    <div class="container py-5">
        <h1 class="text-center">{{ $category->title }}</h1>
        <div class="row">
            @foreach ($videos as $video)
            <div class="col-lg-12">
                <h3>{{ $video->title }}</h3>
                <div class="video-block" >
                    <iframe class="video" style="width:100%; min-height: 600px"
                    src="https://www.youtube.com/embed/{{$video->video}}" allowfullscreen>
                    </iframe>
                </div>
                <div class="description-block">
                    {{ $video->description }}
                </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection
