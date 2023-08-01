@extends('layouts.app')

@section('title', 'Kartké video triky do Power BI a Excel,')
@section('description', 'Kurzy MS Excel - Kartké video triky. Naučte se ovládat Power BI desktop. Power BI triky')
@section('keywords', 'Triky, Power BI , Excel, Efektivní analýza dat a reporting (PWBI1), PWBI1, Microsoft Office, Power BI, Kurz, Školení')

@section('content')
<div class="container py-5">
    <h1 class="text-center pb-5">Kartké video triky</h1>
    @livewire('trick-list', ['tricks' => $tricks],)
</div>

@endsection
