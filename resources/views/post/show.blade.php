@extends('layouts.app')
@section('title', $post->seo_title)
@section('description', $post->seo_description)
@section('keywords', $post->seo_keywords)

@section('content')
    <div class="container py-5">
        <h1 class="text-center">{{ $post->title }}</h1>
        <div class="row justify-content-center">
            <div class="col-lg-2">
                <img style="width:100%" alt="" src="{{$post->image}}">

            </div>
        </div>

        {!! $post->text !!}
    </div>
@endsection
