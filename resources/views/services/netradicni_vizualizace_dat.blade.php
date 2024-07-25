@extends('layouts.app')
@section('title', 'Netradiční vizualizace dat')
@section('description', 'Netradiční vizualizace dat. Implementace vlastních BI řešení. Řešení úkolu, ne jen hezké obrázky. Vizualizace dat jakékoliv složitosti. Přizpůsobení pro nestandardní zařízení. Tato služba je určena pro náročné obchodní zákazníky nebo dodavatele, kteří pracují na unikátním produktu s vizualizací dat. Pro případy, kdy standardní BI řešení nejsou vhodná.')
@section('keywords', 'vizualizace dat, BI řešení, Power BI, Qlik, Tableau, dashboardy, datová úložiště, custom vizualizace, konzultace, obchodní analýza')

@section('content')

<div class="container">
    <h1 class="text-center">Netradiční vizualizace dat</h1>
    <div class="row py-5">
        <div class="col-lg-6">
            <div class="wrap-for-img">
                <img src="{{asset('services/system_firemniho_reportingu.png')}}" alt="" class="image">
                <img src="{{asset('services/system_firemniho_reportingu.png')}}" alt="" class="mirror-image">
            </div>
        </div>
        <div class="col-lg-6">
            <h3 class="text-center pb-5">
                Implementace vlastních BI řešení
            </h3>
            <div class="service-firm-rep my-3">
                Řešení úkolu, ne jen hezké obrázky.
            </div>
            <div class="service-firm-rep my-3">
                Vizualizace dat jakékoliv složitosti.
            </div>
            <div class="service-firm-rep my-3">
                Přizpůsobení pro nestandardní zařízení.
            </div>

            <div class="service-block-button">
                <a href="{{ route('contact.index') }}" class="btn btn-primary float-end">Kontaktujte nás</a>
            </div>
        </div>
    </div>

    <h3 class="text-center py-3">
        Když IT a byznys mluví různými jazyky
    </h3>
    <h5 class="text-center py-3 ps-5 pe-5">
        Tato služba je určena pro náročné obchodní zákazníky nebo dodavatele, kteří pracují na unikátním produktu s vizualizací dat.
        Pro případy, kdy standardní BI řešení nejsou vhodná.
    </h5>
    <div class="row py-3">
        <div class="col-lg-4 py-3">
            <div class="row">
                <div class="col-sm-2">
                    <span class="service-dot"></span>
                </div>
                <div class="col-sm-10">
                    <span class="service-dot-small-screan"></span>
                    Vaše kompetence nestačí na vizualizaci dat: náročný zákazník je nespokojený.
                </div>
            </div>
        </div>
        <div class="col-lg-4 py-3">
            <div class="row">
                <div class="col-sm-2">
                    <span class="service-dot"></span>
                </div>
                <div class="col-sm-10">
                    <span class="service-dot-small-screan"></span>
                    Designéři vytvářejí hezké obrázky bez zohlednění technických vlastností produktu.
                </div>
            </div>
        </div>
        <div class="col-lg-4 py-3">
            <div class="row">
                <div class="col-sm-2">
                    <span class="service-dot"></span>
                </div>
                <div class="col-sm-10">
                    <span class="service-dot-small-screan"></span>
                    IT tým požaduje přesné technické zadání a řeší technický, nikoli obchodní problém.
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center py-3">
        Jak řešíme takové úkoly
    </h2>
    <h5 class="text-center">
        Mluvíme s lidmi z byznysu a IT specialisty jejich jazykem.
    </h5>

    <div class="row pb-5">
        <div class="service-ul-center-wrap">
            <ul class="service-ul-center">
                <li class="py-2">
                    Nevyžadujeme technické zadání, ale nabízíme varianty vizualizace na výběr.
                </li>
                <li class="py-2">
                    Přizpůsobujeme se videostěnám, mobilním aplikacím a dalším zařízením.
                </li>
                <li class="py-2">
                    Personalizujeme produkt: pro ředitele, klienty nebo investory.
                </li>
                <li class="py-2">
                    Pracujeme s jakýmikoliv databázemi a daty jakékoliv složitosti.
                </li>
            </ul>
        </div>

        <div class="col-lg-4 pb-3">
            <div class="service-block-wrap">
                <div class="d-flex align-items-center pb-4">
                    <img src="{{ asset('svg/Technik.svg') }}" class="service-svg-net-viz-dat" alt="Datová úložiště na MS SQL a Azure">
                    <h4>Top management</h4>
                </div>
                <div class="">
                    Dostává nejen krásnou vizualizaci dat, ale informační produkt v obchodním jazyce.
                    Jasné a srozumitelné KPI pomáhají při rozhodování.
                </div>
            </div>

        </div>
        <div class="col-lg-4 pb-3">
            <div class="service-block-wrap">
                <div class="d-flex align-items-center pb-4">
                    <img src="{{ asset('svg/TOP_Management.svg') }}" class="service-svg-net-viz-dat" alt="Datová úložiště na MS SQL a Azure">
                    <h4>Dodavatel</h4>
                </div>
                <div class="">
                    Dostává řešení pro svého zákazníka: vizualizaci ukazatelů, která odpovídá na obchodní otázky, a instrukce pro implementaci produktu pro technické specialisty.
                </div>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="service-block-wrap">
                <div class="d-flex align-items-center pb-4">
                    <img src="{{ asset('svg/dodavatel.svg') }}" class="service-svg-net-viz-dat" alt="Datová úložiště na MS SQL a Azure">
                    <h4>Technické specialisty</h4>
                </div>
                <div class="">
                    Dostávají dokumentaci ve srozumitelném jazyce a mohou se soustředit na své přímé povinnosti bez zjišťování požadavků s ředitelem podniku nebo projektovým manažerem.
                </div>
            </div>
        </div>
    </div>

    <h3>Krok za krokem: Jak získáte svůj produkt</h3>

    <div class="d-flex step-wrap pt-5">
        <div class="step-left-1">
            <h5>Zjistíme požadavky na obchodní úkol</h5>
        </div>
        <div class="step-right-1"></div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-left-2 p-1">
            <span>
                Analyzujeme vaše obchodní potřeby a určujeme klíčové ukazatele výkonnosti (KPI) relevantní pro váš projekt.
            </span>
        </div>
        <div class="step-right-2">
            <h5>Nabízíme varianty řešení úkolu</h5>
        </div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-empty"></div>
        <div class="step-left-3 p-1">
            <span>
                Navrhujeme různé způsoby, jak dosáhnout vašich cílů, a představujeme vám několik možností řešení.
            </span>
        </div>
        <div class="step-right-3">
            <h5>Ukazujeme produkt v praxi</h5>
        </div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-empty"></div>
        <div class="step-empty"></div>

        <div class="step-left-4 p-1">
            <span>
                Předvádíme, jak navržené řešení funguje v reálném prostředí, abyste mohli vidět jeho přínosy a efektivitu.
            </span>
        </div>
        <div class="step-right-4">
            <h5>Vypracováváme dokumentaci pro IT </h5>
        </div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-empty"></div>
        <div class="step-empty"></div>
        <div class="step-empty"></div>

        <div class="step-left-5 p-1">
            <span>
                Připravujeme podrobné technické specifikace a dokumentaci, která umožňuje vaší IT týmu implementovat a spravovat řešení.
            </span>
        </div>
        {{-- <div class="step-right-5">
            <h5>Bereme systém na technickou podporu</h5>
        </div> --}}
    </div>
    {{-- <div class="d-flex step-wrap">
        <div class="step-empty"></div>
        <div class="step-empty"></div>
        <div class="step-empty"></div>
        <div class="step-empty"></div>

        <div class="step-left-6 p-1">
            <span>Nebo předáváme projekt vám pro další správu – tento výběr děláte vy.</span>
        </div>
        <div class="step-right-6">
            <h5></h5>
        </div>
    </div> --}}

    </div>
</div>


@endsection
