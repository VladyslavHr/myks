@extends('layouts.app')

@section('title', 'Blog do Power BI a Excel,')
@section('description', 'Kurzy MS Excel - Blog. Naučte se ovládat Power BI desktop. Power BI triky')
@section('keywords', 'Blog, Power BI , Excel, Efektivní analýza dat a reporting (PWBI1), PWBI1, Microsoft Office, Power BI, Kurz, Školení')

@section('content')
<div class="container py-5">
    <h1 class="text-center pb-5">Blog</h1>
    @livewire('post-list', ['posts' => $posts],)
</div>

@endsection
