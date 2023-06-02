@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center pb-5">Kartké video triky</h1>
    @livewire('trick-list', ['tricks' => $tricks],)
</div>

@endsection
