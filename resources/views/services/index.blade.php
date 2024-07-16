@extends('layouts.app')
@section('title', 'Služby pro Vizualizaci Dat a BI Řešení - Power BI, Qlik, Tableau')
@section('description', 'Nabízíme komplexní služby pro vizualizaci dat a BI řešení pomocí nástrojů jako Power BI, Qlik a Tableau. Vyvíjíme dashboardy, datová úložiště a custom vizualizace přizpůsobené vašim potřebám. Kontaktujte nás pro více informací.')
@section('keywords', 'vizualizace dat, BI řešení, Power BI, Qlik, Tableau, dashboardy, datová úložiště, custom vizualizace, konzultace, obchodní analýza')

@section('content')

<div class="container py-5">
    <h1 class="text-center fw-bold">Služby pro vizualizaci dat a BI řešení</h1>

    <div class="row py-5">
        <div class="col-md-4">
            <div class="img-servic-wrap">
                <img src="{{ asset('services/service1.png') }}" alt="" class="image-service">
            </div>
            <div class="service-img-text fw-bolder text-center">Dashboardy v Power BI, Qlik, Tableau</div>
        </div>
        <div class="col-md-4">
            <div class="img-servic-wrap">
                <img src="{{ asset('services/service2.png') }}" alt="" class="image-service">
            </div>
            <div class="service-img-text fw-bolder text-center">Datová úložiště na MS SQL a Azure</div>
        </div>
        <div class="col-md-4">
            <div class="img-servic-wrap">
                <img src="{{ asset('services/service3.png') }}" alt="" class="image-service">
            </div>
            <div class="service-img-text fw-bolder text-center">Custom vizualizace pro vaše produkty</div>
        </div>
    </div>
</div>
<div class="wrap-service-body">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6">
                <div class="service-box-wrap">
                    <div class="service-box-title">
                        <h2 class="text-center ">Systém firemního reporting</h2>
                    </div>
                    <div class="service-block-text">Stavíme datové sklady a integrujeme komplexní BI-analytická řešení pro velké společnosti.</div>
                    <div class="service-block-bottom pt-5">
                        <div class="service-block-bottom-img">
                            <img src="{{ asset('services/service4.png') }}" alt="" class="image-service-block">
                        </div>
                        <div class="service-block-button">
                            <button class="btn btn-primary">Více informace</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-wrap">
                    <div class="service-box-title">
                        <h2 class="text-center ">Netradiční vizualizace dat</h2>
                    </div>
                    <div class="service-block-text">Vyvíjíme unikátní produkty přizpůsobené vašemu systému a adaptované pro vaše nosiče, specializované na složité KPI.</div>
                    <div class="service-block-bottom pt-5">
                        <div class="service-block-bottom-img">
                            <img src="{{ asset('services/service5.png') }}" alt="" class="image-service-block">
                        </div>
                        <div class="service-block-button">
                            <button class="btn btn-primary">Více informace</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-wrap">
                    <div class="service-box-title">
                        <h2 class="text-center ">Osobní konzultace</h2>
                    </div>
                    <div class="service-block-text">Pro akcionáře, manažery a analytiky. Řešíme konkrétní obchodní úkoly v rámci hodinových konzultací.</div>
                    <div class="service-block-bottom pt-5">
                        <div class="service-block-bottom-img">
                            <img src="{{ asset('services/service6.png') }}" alt="" class="image-service-block">
                        </div>
                        <div class="service-block-button">
                            <button class="btn btn-primary">Více informace</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-wrap">
                    <div class="service-box-title">
                        <h2 class="text-center ">První manažerský dashboard</h2>
                    </div>
                    <div class="service-block-text">Rychlý start pro malé a střední podniky. Nastavíme systém manažerské kontroly během měsíce</div>
                    <div class="service-block-bottom pt-5">
                        <div class="service-block-bottom-img">
                            <img src="{{ asset('services/service7.png') }}" alt="" class="image-service-block">
                        </div>
                        <div class="service-block-button">
                            <button class="btn btn-primary">Více informace</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <h2 class="text-center">Individuální přístup k cenotvorbe každého projektu</h2>
    <div class="row align-items-center pt-3">
        <div class="col-md-3">
            <img src="{{ asset('services/service8.png') }}" alt="" class="image">
        </div>
        <div class="col-md-9">
            <h2>
                Neexistuje univerzální ceník, cena každého dashboardu se posuzuje zvlášť.
            </h2>
        </div>
    </div>
    <h2>
        Klíčové faktory:
    </h2>
    <ul class="service-factors-list">
        <li>
            <strong>Kvalita dat:</strong> Vaše data přímo ovlivňují složitost práce.
        </li>
        <li>
            <strong>Počet databází:</strong> Čím více jich je, tím složitější je integrace.
        </li>
        <li>
            <strong>Kvalita dat:</strong> Určuje hloubku analýzy a design dashboardu.
        </li>
    </ul>
</div>
<div class="wrap-service-body">
    <div class="container p-5">
        <div class="contact-form-wrap">
            @include('contact.blocks.form')
        </div>
    </div>
</div>

@endsection
