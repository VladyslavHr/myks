@extends('layouts.app')
@section('title', $post->seo_title)
@section('description', $post->seo_description)
@section('keywords', $post->seo_keywords)

@section('content')
    <div class="post-main-image" style="background-image: url('{{$post->image}}');">
        <h1 class="post-title">{{ $post->title }}</h1>
    </div>
    <div class="container py-5">
        <div class="word-break post-text" >
            {!! $post->text !!}
        </div>
    </div>
@endsection
