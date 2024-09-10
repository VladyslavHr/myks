@extends('layouts.app')

@section('title', 'Myks: Řízení dat pro efektivní rozhodování')
@section('description', 'Kurzy MS Excel - všechny stupně pokročilosti. Naučte se ovládat Power BI desktop. Výkonný a sofistikovaný nástroj od firmy Microsoft, ve kterém dokážete elegantně vytvořit provázané vizualizace.')
@section('keywords', 'Power BI , Excel, Efektivní analýza dat a reporting (PWBI1), PWBI1, Microsoft Office, Power BI, Kurz, Školení')

@section('content')
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-lg-6">
                <div class="wrap-for-img">
                    <img src="{{asset('home/main-img.png')}}" alt="" class="image">
                    <img src="{{asset('home/main-img.png')}}" alt="" class="mirror-image">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="text-center pb-3">Management založený na datech</h2>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="text-end align-middle home-table">
                                        <img src="{{ asset('svg/Implementace.svg')}}" alt="" class="home-icon-svg">
                                    </td>
                                    <td class="text-start align-middle home-table-text">
                                        Implementace BI systémů
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end align-middle home-table">
                                        <img src="{{ asset('svg/Skoleni.svg')}}" alt="" class="home-icon-svg">
                                    </td>
                                    <td class="text-start align-middle home-table-text">
                                        Vzdělávání pro analytiky
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end align-middle home-table">
                                        <img src="{{ asset('svg/Konzultace.svg')}}" alt="" class="home-icon-svg">
                                    </td>
                                    <td class="text-start align-middle home-table-text">
                                        Konzultace pro manažery
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end align-middle home-table">
                                        <img src="{{ asset('svg/Data_driven.svg')}}" alt="" class="home-icon-svg">
                                    </td>
                                    <td class="text-start align-middle home-table-text">
                                        Rozvoj Data-Driven kultury
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex wrap-programs-img pt-5">
                    <div class="text-center col-md-12 prog-img-small small-qlik">
                        <img class="prog-image-q" src="{{asset('programs-img/qlik.png')}}" alt="">
                    </div>
                    <div class="text-center col-md-6 prog-img-small">
                        <img class="prog-image" src="{{asset('programs-img/tableau.png')}}" alt="">
                    </div>
                    <div class="text-center col-md-6 prog-img-small">
                        <img class="prog-image-powerbi" src="{{asset('programs-img/Power_BI.jfif')}}" alt="">
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
