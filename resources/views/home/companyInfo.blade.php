@extends('layouts.app')
@section('title', 'O společnosti - Automatizace Reportování a Vývoj Dashboardů')
@section('description', 'Zjistěte více o naší společnosti, která se specializuje na automatizaci korporátního reportování, vývoj manažerských dashboardů a školení práce s daty. Pomáháme firmám zefektivnit jejich procesy a dosáhnout obchodních cílů.')
@section('keywords', 'automatizace reportování, vývoj dashboardů, školení práce s daty, podnikové úkoly, KPI, metriky, firemní růst')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">O společnosti</h1>
        <h3 class="text-center py-3">Řešíme podnikové úkoly prostřednictvím analýzy</h3>
        <div class="row py-3">
            <div class="col-md-4">
                <div class="block-firm-imfo">
                    Automatizujeme korporátní reportování, vyvíjíme manažerské dashboardy, školíme práci s daty
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-firm-imfo">
                    Osvobozujeme firmy od rutiny, činíme vaše výsledky názornými, pomáháme podnikům se rozvíjet
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-firm-imfo">
                    K nám přicházejí jak startupy za svým prvním dashboardem, tak korporace, které se potápějí v KPI a dalších metrikách
                </div>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{asset('icons/icon1.png')}}" alt="" class="image">
                    </div>
                    <div class="col-md-8 work-firm-info">
                        Vyvíjíme dashboardy podle vlastní metodologie
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{asset('icons/icon2.png')}}" alt="" class="image">
                    </div>
                    <div class="col-md-8 work-firm-info">
                        Navrhujeme řešení vycházející z obchodních cílů klienta.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{asset('icons/icon3.png')}}" alt="" class="image">
                    </div>
                    <div class="col-md-8 work-firm-info">
                        Realizujeme projekty pouze vlastním týmem.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{asset('icons/icon4.png')}}" alt="" class="image">
                    </div>
                    <div class="col-md-8 work-firm-info">
                        Sdílíme zkušenosti
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
