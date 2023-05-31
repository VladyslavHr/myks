@extends('layouts.app')

@section('content')
<div class="container py-5">
    @livewire('trick-list', ['tricks' => $tricks],)
</div>

@endsection
