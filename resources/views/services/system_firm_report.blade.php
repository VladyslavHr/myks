@extends('layouts.app')
@section('title', 'Systém firemního reportingu')
@section('description', 'Firemní reporting a BI řešení na míru. Matice KPI podle vašich obchodních potřeb: Sledujte klíčové ukazatele výkonnosti přizpůsobené vašim cílům. Srozumitelné manažerské dashboardy: Vizualizujte data snadno a rychle. Integrace s vašimi účetními systémy: Bezproblémové propojení s vašimi stávajícími nástroji.')
@section('keywords', 'vizualizace dat, BI řešení, Power BI, Qlik, Tableau, dashboardy, datová úložiště, custom vizualizace, konzultace, obchodní analýza')

@section('content')

<div class="container">
    <h1 class="text-center">Systém firemního reportingu</h1>

    <div class="row py-5">
        <div class="col-lg-6">
            <div class="wrap-for-img">
                <img src="{{asset('services/system_firemniho_reportingu.png')}}" alt="" class="image">
                <img src="{{asset('services/system_firemniho_reportingu.png')}}" alt="" class="mirror-image">
            </div>
        </div>
        <div class="col-lg-6">
            <h3 class="text-center pb-5">
                Firemní reporting a BI řešení na míru
            </h3>
            <div class="service-firm-rep my-3">
                Matice KPI podle vašich obchodních potřeb: Sledujte klíčové ukazatele výkonnosti
                přizpůsobené vašim cílům.
            </div>
            <div class="service-firm-rep my-3">
                Srozumitelné manažerské dashboardy: Vizualizujte data snadno a rychle.
            </div>
            <div class="service-firm-rep my-3">
                Integrace s vašimi účetními systémy: Bezproblémové propojení s vašimi stávajícími nástroji.
            </div>

            <div class="service-block-button">
                <a href="{{ route('contact.index') }}" class="btn btn-primary float-end">Kontaktujte nás</a>
            </div>
        </div>
    </div>

    <h3 class="text-center py-3">
        Unavuje vás Excel? Připravte se na revoluci v reportingu!
        Znáte tyto problémy?
    </h3>
    <div class="row py-3">
        <div class="col-lg-12 py-3">
            <b>Nekonečné tabulky:</b> Investovali jste miliony do automatizace, ale pořád pracujete s nepřehlednými tabulkami.
        </div>
        <div class="col-lg-12 py-3 text-center">
            <b>Chaos v datech:</b> Je těžké najít problémy a zjistit, proč plány selhávají.
        </div>
        <div class="col-lg-12 py-3 text-end">
            <b>Plýtvání časem:</b> Ruční sběr dat a vytváření reportů zabírá příliš mnoho času.
        </div>
        <div class="col-lg-12 py-3">
            <b>Nevěrohodné reporty:</b> Podřízení uvádějí jen pro ně výhodné KPI.
        </div>
    </div>

    <h2 class="text-center py-3">
        Naše řešení: Zjednodušte si život s moderním reportingem
    </h2>
    <h5 class="text-center">
        Nabízíme vám inovativní nástroj pro rozhodování a kontrolu KPI v reálném čase:
    </h5>

    <div class="row">
        <div class="col-lg-4 py-3">
            <h5>Integrace s CRM</h5>
            Mějte přehled o efektivitě prodeje.
        </div>
        <div class="col-lg-4 py-3">
            <h5>Skrzová analytika a ROI</h5>
            Sledujte návratnost investic do prodejních kanálů.
        </div>
        <div class="col-lg-4 py-3">
            <h5>P&L a faktorová analýza pro holding</h5>
            Detailní přehled o finančním zdraví vašich dceřiných společností.
        </div>
        <div class="col-lg-4 py-3">
            <h5>Integrace s MES, ERP</h5>
            Kontrolujte výrobní KPI bez námahy
        </div>
        <div class="col-lg-4 py-3">
            <h5>HR analytika a hodnocení kompetencí</h5>
            Mějte přehled o výkonnosti zaměstnanců.
        </div>
        <div class="col-lg-4 py-3">
            <h5>Logistika a řízení zásob</h5>
            Optimalizujte své skladové hospodářství.
        </div>
    </div>

    <h3>Jak to funguje?</h3>
    <div class="">
        Nevyžadujeme technické zadání, vypracujeme ho sami – vy jen schvalujete. Dělíme velký projekt na čtvrtletní vydání. První pracovní dashboard obdržíte už za měsíc.
    </div>

    <div class="d-flex step-wrap pt-5">
        <div class="step-left-1">
            <h5>Navrhujeme design dashboardů</h5>
        </div>
        <div class="step-right-1"></div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-left-2 p-1">
            <span>
                Zkoumáme vaše obchodní procesy a data, vytváříme matici klíčových ukazatelů výkonnosti a nabízíme návrhy designu. Vy si vyberete vizuální koncepci budoucích dashboardů.
            </span>
        </div>
        <div class="step-right-2">
            <h5>Optimalizujeme práci s daty</h5>
        </div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-empty"></div>
        <div class="step-left-3 p-1">
            <span>
                Vypracujeme správné šablony pro zadávání dat, připojujeme k analytickému systému a nastavujeme automatickou aktualizaci dat. Obdržíte variantu dashboardu založenou na vašich skutečných datech.
            </span>
        </div>
        <div class="step-right-3">
            <h5>Připojujeme BI systém k datům</h5>
        </div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-empty"></div>
        <div class="step-empty"></div>

        <div class="step-left-4 p-1">
            <span>
                V průběhu úprav programových skriptů připojujeme BI systém přímo k databázím a provádíme integraci „od A do Z“. Uvidíte, jak systém funguje v praxi a získáte odpovědi na manažerské otázky.
            </span>
        </div>
        <div class="step-right-4">
            <h5>Školíme práci s BI systémem</h5>
        </div>
    </div>
    <div class="d-flex step-wrap">
        <div class="step-empty"></div>
        <div class="step-empty"></div>
        <div class="step-empty"></div>

        <div class="step-left-5 p-1">
            <span>
                Pokud se rozhodnete spravovat analytický systém samostatně, konzultujeme vaše zaměstnance a poskytneme podrobné instrukce, jak s ním pracovat.
            </span>
        </div>
        <div class="step-right-5">
            <h5>Bereme systém na technickou podporu</h5>
        </div>
    </div>
    <div class="d-flex step-wrap">
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
    </div>

    </div>
</div>


@endsection
