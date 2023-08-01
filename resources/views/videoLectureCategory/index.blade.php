@extends('layouts.app')

@section('title', 'Kurz Úvod do Power BI a Excel,')
@section('description', 'Kurzy MS Excel - všechny stupně pokročilosti. Naučte se ovládat Power BI desktop.')
@section('keywords', 'Power BI , Excel, Efektivní analýza dat a reporting (PWBI1), PWBI1, Microsoft Office, Power BI, Kurz, Školení')


@section('content')
    <div class="container py-5">
        <h1 class="text-center pb-5">Video lekce</h1>
        <div class="row">
            @foreach ($categories as $category)
            @if (count($category->videos))
            {{-- <div class="col-lg-3 pb-3">
                <a class="link-video-category" href="{{ route('videoLectureCategory.show', $category->slug) }}">
                    <h3>{{ $category->title }}</h3>
                    <div class="main-img">
                        <img class="img-width" src="{{ $category->main_img }}" alt="">
                    </div>
                    <div class="description-category">
                        {{$category->description}}
                    </div>
                </a>
            </div> --}}
            <div class="row pt-5">
                @if ($loop->even)
                <div class="col-lg-5">
                    <img class="img-width" src="{{ $category->main_img }}" alt="">
                </div>
                @endif
                <div class="col-lg-7">
                    <h2 class="pb-1">{{ $category->title }}</h2>
                    <p class="">
                        {{ $category->description }}
                    </p>
                    <a href="{{ route('videoLectureCategory.show', $category->slug) }}" class="button location-link btn btn-primary">
                        <span>Číst více</span>
                    </a>
                </div>
                @if ($loop->odd)
                <div class="col-lg-5 order-lg-last order-first">
                    <img class="img-width" src="{{ $category->main_img }}" alt="">
                </div>
                @endif
            @else
            @endif

            @endforeach
        </div>
    </div>











    {{-- @foreach ($categories as $category)
@if ($location->id == 3)
<div class="row pt-5 d-none">
    @if ($loop->even)
    <div class="col-lg-5">
        <img class="wimg" src="{{ $location->main_img }}" alt="">
    </div>
    @endif
    <div class="col-lg-7">
        <h2 class="pb-2">{{ $location->title }}</h2>
        <h3 class="pb-3">{{ $location->sub_title }}</h3>
        <p class="">
            {{ $location->description }}
        </p>
        <p class=""><strong>Poznejte toto krásné místo z okružní plavby na naší lodi. Pronájem lodi {{ $location->boat->name }} s kapacitou pro {{ $location->capacity }} os.</strong></p>
        <a href="{{ route('requestSailing.locationShow', $location->slug) }}" class="button location-link">
            <span>Číst více</span>
        </a>
    </div>
    @if ($loop->odd)
    <div class="col-lg-5 order-lg-last order-first">
        <img class="wimg" src="{{ $location->main_img }}" alt="">
    </div>
    @endif
</div>
@else
<div class="row pt-5">
    @if ($loop->even)
    <div class="col-lg-5">
        <img class="wimg" src="{{ $location->main_img }}" alt="">
    </div>
    @endif
    <div class="col-lg-7">
        <h2 class="pb-1">{{ $location->title }}</h2>
        <h3 class="pb-2">{{ $location->sub_title }}</h3>
        <p class="">
            {{ $location->description }}
        </p>
        <p class=""><strong>Poznejte toto krásné místo z okružní plavby na naší lodi. Pronájem lodi {{ $location->boat->name }} s kapacitou pro {{ $location->capacity }} os.</strong></p>
        <a href="{{ route('requestSailing.locationShow', $location->slug) }}" class="button location-link">
            <span>Číst více</span>
        </a>
    </div>
    @if ($loop->odd)
    <div class="col-lg-5 order-lg-last order-first">
        <img class="wimg" src="{{ $location->main_img }}" alt="">
    </div>
    @endif
</div>
@endif
@endforeach --}}

@endsection
