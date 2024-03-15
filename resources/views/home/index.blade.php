@extends('layouts.app')

@section('title', 'Kurz Úvod do Power BI a Excel,')
@section('description', 'Kurzy MS Excel - všechny stupně pokročilosti. Naučte se ovládat Power BI desktop. Výkonný a sofistikovaný nástroj od firmy Microsoft, ve kterém dokážete elegantně vytvořit provázané vizualizace.')
@section('keywords', 'Power BI , Excel, Efektivní analýza dat a reporting (PWBI1), PWBI1, Microsoft Office, Power BI, Kurz, Školení')

@section('content')
    <div class="container py-5">
        {{-- <h1 class="text-center">Vítejete na webu <strong>MYKS.CZ</strong> </h1>
        <p>
            Objevte svět Business Intelligence (BI) videolékcí v ČR a na Slovensku!
            Získejte dovednosti, které vám pomohou využít plný potenciál BI a dosáhnout úspěchu ve vašem podnikání!
            Naučte se pokročilé techniky sběru, analýzy a vizualizace dat. Pracujte s reálnými příklady a objevte klíčové poznatky pro konkurenční výhodu.
            Zúčastněte se interaktivních cvičení a získejte expertní rady a tipy od zkušených profesionálů BI.
            Přidejte se k naší komunitě na platformě myks.cz a posuňte svou kariéru na novou úroveň!
            Klikněte na tlačítko "Přehrát" a začněte svou cestu k excelenci v BI!
        </p>
        <h3 class="text-center pt-3">Připravujeme další informace</h3> --}}

        <div class="row py-3">
            <div class="col-lg-6">
                <div class="wrap-for-img">
                    <img src="{{asset('home/main-img.png')}}" alt="" class="image">
                    <img src="{{asset('home/main-img.png')}}" alt="" class="mirror-image">
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-center">Management založený na datech</h3>
                <ul class="home-ul py-3">
                    <li class="py-1">Implementace BI systémů</li>
                    <li class="py-1">Vzdělávání pro analytiky</li>
                    <li class="py-1">Konzultace pro manažery</li>
                    <li class="py-1">Rozvoj Data-Driven kultury</li>
                </ul>

                <div class="d-flex wrap-programs-img pt-5">
                    <div class="text-center col-md-6 prog-img-small">
                        <img class="prog-image-powerbi" src="{{asset('programs-img/Power_BI.jfif')}}" alt="">
                    </div>
                    <div class="text-center col-md-6 prog-img-small">
                        <img class="prog-image" src="{{asset('programs-img/tableau.png')}}" alt="">
                    </div>
                    <div class="text-center col-md-12 prog-img-small small-qlik">
                        <img class="prog-image-q" src="{{asset('programs-img/qlik.png')}}" alt="">
                    </div>
                    <div class="text-center col-md-6 prog-img-small">
                        <img class="prog-image" src="{{asset('programs-img/azure.png')}}" alt="">
                    </div>
                    <div class="text-center col-md-6 prog-img-small">
                        <img class="prog-image-sql" src="{{asset('programs-img/sql-server.png')}}" alt="">
                    </div>
                    <div class="text-center col-md-12 prog-img-small small-excel">
                        <img class="prog-image-excel" src="{{asset('programs-img/excel-icon-17.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
