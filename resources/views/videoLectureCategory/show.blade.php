@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ $category->title }}</h1>
        <div class="row">
            @foreach ($videos as $video)
            <div class="col-lg-12">
                <h3>{{ $video->title }}</h3>
                <div class="video-block" >
                    <iframe class="video" style="width:100%; min-height: 600px"
                    src="https://www.youtube.com/embed/{{$video->video}}">
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
