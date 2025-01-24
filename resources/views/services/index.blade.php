@extends('layouts.app')
@section('title', 'Služby pro Vizualizaci Dat a BI Řešení - Power BI, Qlik, Tableau')
@section('description', 'Nabízíme komplexní služby pro vizualizaci dat a BI řešení pomocí nástrojů jako Power BI, Qlik a Tableau. Vyvíjíme dashboardy, datová úložiště a custom vizualizace přizpůsobené vašim potřebám. Kontaktujte nás pro více informací.')
@section('keywords', 'vizualizace dat, BI řešení, Power BI, Qlik, Tableau, dashboardy, datová úložiště, custom vizualizace, konzultace, obchodní analýza')

@section('content')

<div class="container py-5">
    <h3 class="text-center">Služby pro vizualizaci dat a BI řešení</h3>

    <div class="row py-5">
        <div class="col-md-4">
            {{-- <div class="img-servic-wrap">
                <img src="{{ asset('services/service1.png') }}" alt="" class="image-service">
            </div> --}}
            <div class="img-servic-wrap">
                <img src="{{ asset('svg/Dashboardy_v_Power_BI_Qlik_Tableau.svg') }}" class="image-service" alt="Dashboardy v Power BI, Qlik, Tableau">
            </div>
            {{-- <div class="svg-icon-service-wrap">
                <div class="svg-icon-service">
                    <svg width="100%" height="100%" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                        <g id="SVGRepo_iconCarrier">
                        <path d="M878.3 192.9H145.7c-16.5 0-30 13.5-30 30V706c0 16.5 13.5 30 30 30h732.6c16.5 0 30-13.5 30-30V222.9c0-16.5-13.5-30-30-30z" fill="#FFFFFF"/>
                        <path d="M145.7 736h732.6c16.5 0 30-13.5 30-30v-22.1H115.7V706c0 16.6 13.5 30 30 30z" fill="#E6E6E6"/>
                        <path d="M878.3 152.9H145.7c-38.6 0-70 31.4-70 70V706c0 38.6 31.4 70 70 70h732.6c38.6 0 70-31.4 70-70V222.9c0-38.6-31.4-70-70-70z m30 531V706c0 16.5-13.5 30-30 30H145.7c-16.5 0-30-13.5-30-30V222.9c0-16.5 13.5-30 30-30h732.6c16.5 0 30 13.5 30 30v461zM678 871.1H346c-11 0-20-9-20-20s9-20 20-20h332c11 0 20 9 20 20s-9 20-20 20z" fill="#660a80"/>
                        <path d="M127.1 662.7c-2.7 0-5.4-1.1-7.3-3.2-3.7-4.1-3.5-10.4 0.6-14.1l236.5-219.6L463 541.9l258.9-290.7 183.7 196.3c3.8 4 3.6 10.4-0.4 14.1-4 3.8-10.3 3.6-14.1-0.4L722.3 280.8l-259 290.9L355.7 454 133.9 660c-2 1.8-4.4 2.7-6.8 2.7z" fill="#1c139a"/>
                        <path d="M156.4 541.9a82.7 82.8 0 1 0 165.4 0 82.7 82.8 0 1 0-165.4 0Z" fill="#D7E7FF"/>
                        <path d="M179.8 541.9a59.3 59.3 0 1 0 118.6 0 59.3 59.3 0 1 0-118.6 0Z" fill="#B5CFF4"/>
                        <path d="M208.9 541.9a30.2 30.3 0 1 0 60.4 0 30.2 30.3 0 1 0-60.4 0Z" fill="#660a80"/>
                        <path d="M580.9 329.9a82.7 82.8 0 1 0 165.4 0 82.7 82.8 0 1 0-165.4 0Z" fill="#D7E7FF"/>
                        <path d="M604.3 329.9a59.3 59.3 0 1 0 118.6 0 59.3 59.3 0 1 0-118.6 0Z" fill="#B5CFF4"/>
                        <path d="M633.4 329.9a30.2 30.3 0 1 0 60.4 0 30.2 30.3 0 1 0-60.4 0Z" fill="#660a80"/>
                        <path d="M719.3 539.6a46.3 46.4 0 1 0 92.6 0 46.3 46.4 0 1 0-92.6 0Z" fill="#D7E7FF"/>
                        <path d="M732.4 539.6a33.2 33.2 0 1 0 66.4 0 33.2 33.2 0 1 0-66.4 0Z" fill="#B5CFF4"/>
                        <path d="M748.7 539.6a16.9 17 0 1 0 33.8 0 16.9 17 0 1 0-33.8 0Z" fill="#660a80"/>
                        <path d="M436.8 720.1H275.2c-5 0-9-4-9-9s4-9 9-9h161.6c5 0 9 4 9 9 0 4.9-4.1 9-9 9zM220.6 720.1h-26.5c-5 0-9-4-9-9s4-9 9-9h26.5c5 0 9 4 9 9 0 4.9-4.1 9-9 9z" fill="#FFFFFF"/>
                        </g>
                    </svg>
                </div>
            </div> --}}
            <div class="service-img-text text-center">Dashboardy v Power BI, Qlik, Tableau</div>
        </div>
        <div class="col-md-4">
            <div class="img-servic-wrap">
                <img src="{{ asset('svg/Datova_uloziste_na_MS_SQL_a_Azure.svg') }}" class="image-service" alt="Datová úložiště na MS SQL a Azure">
            </div>
            {{-- <div class="img-servic-wrap">
                <img src="{{ asset('services/service2.png') }}" alt="" class="image-service">
            </div> --}}
            {{-- <div class="svg-icon-service-wrap">
                <div class="svg-icon-service"> --}}
                    {{-- <svg width="100%" height="100%" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                        <g id="SVGRepo_iconCarrier">
                        <path d="M822.8 466.5c0.1 0.3 0.2 0.5 0.3 0.8-0.1-0.2-0.2-0.5-0.3-0.8zM593.4 665.2c0-0.1-0.1-0.2-0.1-0.3 0 0.1 0.1 0.2 0.1 0.3zM834.7 508c0.1 0.4 0.2 0.9 0.3 1.3-0.1-0.4-0.2-0.8-0.3-1.3zM820 459.5c0.1 0.3 0.2 0.6 0.4 0.8-0.2-0.2-0.3-0.5-0.4-0.8zM831.5 493.9c0.1 0.3 0.2 0.7 0.3 1-0.1-0.3-0.2-0.6-0.3-1zM817.1 453c0.2 0.4 0.4 0.9 0.6 1.3-0.2-0.4-0.4-0.9-0.6-1.3zM825.2 472.8c0.1 0.4 0.3 0.8 0.4 1.2-0.1-0.3-0.3-0.7-0.4-1.2zM594.7 668c0-0.1-0.1-0.1-0.1-0.2 0 0.1 0 0.2 0.1 0.2zM630.4 656.5c-0.3 0.2-0.5 0.5-0.8 0.7 0.2-0.3 0.5-0.5 0.8-0.7zM829.7 487c0.1 0.4 0.2 0.7 0.3 1.1-0.1-0.3-0.2-0.7-0.3-1.1zM791.6 410.8l0.9 1.2-0.9-1.2zM623.7 663.4c-0.8 1-1.6 2.2-2.4 3.3 0.8-1.2 1.6-2.3 2.4-3.3zM803.8 428.3c0.1 0.2 0.3 0.4 0.4 0.6-0.1-0.1-0.2-0.3-0.4-0.6zM621.3 666.8l-1.2 1.8 1.2-1.8zM799.9 422.2c0.3 0.5 0.6 1 1 1.4-0.4-0.4-0.7-0.9-1-1.4zM626.4 660.2c-0.3 0.4-0.7 0.7-1 1.1 0.3-0.3 0.7-0.7 1-1.1zM592.2 662.2c-0.1-0.2-0.1-0.3-0.2-0.5 0.1 0.2 0.2 0.3 0.2 0.5zM807.5 434.4c0.2 0.4 0.5 0.8 0.7 1.2-0.2-0.4-0.5-0.8-0.7-1.2zM613.5 682.3c-0.2 0.4-0.3 0.8-0.5 1.3 0.2-0.4 0.3-0.8 0.5-1.3zM814.4 447.2zM810.7 440.2c0.2 0.4 0.5 0.9 0.7 1.3-0.2-0.5-0.5-0.9-0.7-1.3zM624.9 662c-0.4 0.4-0.7 0.9-1.1 1.3 0.4-0.5 0.7-0.9 1.1-1.3zM607.9 687.7l-0.2-0.2 0.2 0.2zM699.6 702.5c-0.1-0.1-0.2-0.2-0.2-0.3 0 0.2 0.1 0.2 0.2 0.3zM632.2 655c-0.2 0.2-0.4 0.3-0.6 0.5 0.2-0.1 0.4-0.3 0.6-0.5zM627.2 659.4l1.4-1.4-1.4 1.4zM610.7 690.4c-0.5-0.4-1-0.9-1.5-1.4 0.5 0.5 1 0.9 1.5 1.4zM846 571.5l-5.4-3.8 8.2 5.7zM615.1 678.5c-0.3 0.6-0.5 1.2-0.8 1.8 0.3-0.6 0.5-1.2 0.8-1.8zM698.2 701.1zM590 655.7c-0.1-0.3-0.2-0.5-0.2-0.8 0.1 0.2 0.2 0.5 0.2 0.8zM616.7 674.9c1.1-2.2 2.2-4.2 3.3-6.2-1.7 2.9-3.4 6-4.9 9.5 0.5-1.1 1.1-2.2 1.6-3.3zM787.4 405.7c0.4 0.5 0.7 0.9 1.1 1.4-0.3-0.5-0.7-1-1.1-1.4zM591.1 659c-0.1-0.2-0.2-0.4-0.2-0.7 0.1 0.3 0.1 0.5 0.2 0.7zM838.1 529zM839.9 548.9c0 0.7 0.1 1.3 0.1 2 0-0.6-0.1-1.3-0.1-2zM634.6 653.5c-0.2 0.1-0.4 0.2-0.6 0.4 0.2-0.2 0.4-0.3 0.6-0.4zM835.9 514.4l0.3 1.5-0.3-1.5zM612 686.3c-0.1 0.2-0.2 0.5-0.2 0.7 0.1-0.2 0.2-0.5 0.2-0.7zM837 521.2c0.1 0.4 0.1 0.7 0.2 1.1-0.1-0.3-0.1-0.7-0.2-1.1zM839.4 542c0.1 0.7 0.1 1.5 0.2 2.2-0.1-0.7-0.2-1.4-0.2-2.2zM796.2 417c0.2 0.3 0.4 0.6 0.7 0.9-0.2-0.2-0.4-0.6-0.7-0.9zM595.9 670.7zM636.6 652.3l-0.6 0.3 0.6-0.3zM838.8 535.4c0.1 0.6 0.1 1.2 0.2 1.9-0.1-0.6-0.1-1.3-0.2-1.9z" fill="#FFFFFF"/>
                        <path d="M822.6 644.9l14.4 6.4c12.4 5.5 21.5 18.3 27.9 39.1 8-7.1 16.9-19.1 21.9-39.2 10.7-42.6-37.6-77.4-38.1-77.8l-8.2-5.7-0.3-10c-0.1-2.3-0.2-4.5-0.3-6.7 0-0.7-0.1-1.4-0.1-2-0.1-1.6-0.2-3.1-0.3-4.7-0.1-0.7-0.1-1.5-0.2-2.2-0.1-1.6-0.3-3.2-0.4-4.7-0.1-0.6-0.1-1.2-0.2-1.9-0.2-2.2-0.5-4.3-0.7-6.4l-0.9-6.6c-0.1-0.4-0.1-0.7-0.2-1.1-0.3-1.8-0.5-3.6-0.8-5.3l-0.3-1.5-0.9-5.1c-0.1-0.4-0.2-0.9-0.3-1.3-0.4-2.1-0.8-4.1-1.3-6.2-0.5-2.3-1.1-4.6-1.6-6.9-0.1-0.3-0.2-0.7-0.3-1-0.5-2-1-3.9-1.6-5.8-0.1-0.4-0.2-0.7-0.3-1.1-1.3-4.4-2.6-8.7-4.1-12.9-0.1-0.4-0.3-0.8-0.4-1.2-0.7-1.9-1.3-3.7-2-5.5-0.1-0.3-0.2-0.5-0.3-0.8-0.8-2.1-1.6-4.1-2.5-6.2-0.1-0.3-0.2-0.6-0.4-0.8-0.7-1.7-1.5-3.5-2.3-5.2-0.2-0.4-0.4-0.9-0.6-1.3-0.9-1.9-1.8-3.9-2.7-5.8-1-1.9-2-3.9-3-5.8-0.2-0.4-0.5-0.9-0.7-1.3-0.8-1.5-1.7-3-2.5-4.5-0.2-0.4-0.5-0.8-0.7-1.2-1.1-1.8-2.1-3.6-3.3-5.4-0.1-0.2-0.3-0.4-0.4-0.6-1-1.6-2-3.1-3-4.7-0.3-0.5-0.6-1-1-1.4-1-1.4-2-2.9-3-4.3-0.2-0.3-0.4-0.6-0.7-0.9-1.2-1.7-2.4-3.3-3.7-5l-0.9-1.2c-1-1.3-2-2.6-3-3.8-0.4-0.5-0.7-0.9-1.1-1.4-1.3-1.6-2.7-3.2-4-4.8-17.8-20.3-35.6-32.4-45.6-38.2-9.9 5.8-27.7 17.9-45.6 38.2-35.6 40.6-54.8 93.3-56.9 156.8l-0.3 10-8.2 5.7c-0.4 0.3-48.8 35.1-38 77.7 0.3 1.3 0.7 2.5 1 3.7 0.1 0.3 0.2 0.5 0.2 0.8 0.3 0.9 0.5 1.8 0.8 2.7 0.1 0.2 0.2 0.4 0.2 0.7l0.9 2.7c0.1 0.2 0.1 0.3 0.2 0.5 0.3 0.9 0.7 1.8 1 2.7 0 0.1 0.1 0.2 0.1 0.3l1.2 2.7c0 0.1 0.1 0.1 0.1 0.2 0.4 0.9 0.8 1.8 1.3 2.7 0.9 1.8 1.9 3.5 2.8 5.1 2.9 4.7 5.9 8.5 8.9 11.6l0.2 0.2 1.3 1.3c0.5 0.5 1 0.9 1.5 1.4 0.4-1.1 0.7-2.3 1.1-3.4 0.1-0.2 0.2-0.5 0.2-0.7 0.3-0.9 0.6-1.8 1-2.7 0.2-0.4 0.3-0.9 0.5-1.3 0.3-0.7 0.5-1.4 0.8-2.1 0.2-0.6 0.5-1.2 0.8-1.8 0-0.1 0.1-0.1 0.1-0.2 1.5-3.5 3.2-6.7 4.9-9.5l0.1-0.1 1.2-1.8 0.1-0.1c0.8-1.2 1.6-2.3 2.4-3.3l0.1-0.1c0.3-0.4 0.7-0.9 1.1-1.3 0.2-0.2 0.4-0.4 0.5-0.6 0.3-0.4 0.7-0.8 1-1.1l0.8-0.8c0.5-0.5 0.9-1 1.4-1.4 0.3-0.3 0.6-0.6 1-0.9 0.3-0.2 0.5-0.5 0.8-0.7l1.2-0.9c0.2-0.2 0.4-0.3 0.6-0.5l1.8-1.2c0.2-0.1 0.4-0.2 0.6-0.4l1.5-0.9 0.6-0.3c0.7-0.4 1.3-0.7 2-1l14.4-6.4 9.6 12.5c1.9 2.4 3.8 4.9 5.8 7.4 9.5 12.1 19.7 24.7 27.1 33.2 1 1.1 1.9 2.1 2.7 3.1 0.4 0.4 0.7 0.8 1.1 1.2 0.1 0.1 0.2 0.2 0.2 0.3 0.4 0.4 0.7 0.8 1 1.1H775c8.3-8.8 24.7-29 38-46.3l9.6-12.8z m-87.1-87.6c-31.2 0-56.5-25.4-56.5-56.5 0-31.2 25.4-56.5 56.5-56.5s56.5 25.4 56.5 56.5-25.3 56.5-56.5 56.5z" fill="#E6E6E6"/>
                        <path d="M663.8 372.7c32.5-36.3 64.8-50.4 66.1-51l7.9-3.4 7.9 3.4c1.4 0.6 33.7 14.7 66.1 51 11 12.3 22.9 28.1 33.6 47.9C843.2 284.3 731.5 174 594.6 174c-100.8 0-191 60-230.4 151.3 8.5 3 16.7 6.6 24.7 10.7 27.4 14.2 51.5 34.8 69.8 59.7 6.5 8.9 4.6 21.4-4.3 28-8.9 6.5-21.4 4.6-28-4.3-30.3-41.2-78.9-65.8-129.9-65.8-88.9 0-161.1 72.3-161.1 161.1 0 88.9 72.3 161.1 161.1 161.1h258.1c-1.7-4.7-3.3-9.6-4.6-15-14.1-55.9 27.5-98.4 45.8-113.9 5.1-86.6 39.5-142.4 68-174.2z m-151-109.2c-33 18.9-49.4 44.6-49.6 44.9-1.9 3-5.2 4.7-8.5 4.7-1.8 0-3.7-0.5-5.3-1.5-4.7-2.9-6.1-9.1-3.1-13.8 0.8-1.2 19.3-30.2 56.6-51.6 34.4-19.7 91.8-36.4 170-4.1 5.1 2.1 7.5 8 5.4 13.1-2.1 5.1-8 7.5-13.1 5.4-56.7-23.5-108-22.5-152.4 2.9z" fill="#FFFFFF"/>
                        <path d="M646.5 711.3c2.3-0.4 4.6-0.8 6.8-1.3-1.7-2-3.3-4-4.9-6-0.7 2.3-1.4 4.8-1.9 7.3z" fill="#660a80"/>
                        <path d="M827.3 704c1.7 5.8 3.1 12.4 4 18.5l2.7 20.6 20.5-3.5c2.2-0.4 53.9-9.9 71.2-78.7 14.1-55.9-27.5-98.4-45.8-113.9-0.9-15.2-2.7-29.4-5.2-42.8 7.2-25.5 10.9-52.1 10.9-79.3 0-77.7-30.3-150.8-85.2-205.7-55-55-128-85.2-205.7-85.2-119.1 0-225.5 72.3-269.7 181.6-9.4-1.3-18.9-2-28.3-2-110.9 0-201.1 90.2-201.1 201.1s90.2 201.1 201.1 201.1h283c19.6 19.6 40.3 23.5 41.7 23.7l20.4 3.4 2.7-20.5c0.5-3.7 1.2-7.5 2.1-11.2 0.6-2.5 1.2-5 1.9-7.3 1.6 2 3.3 4 4.9 6 10.5 12.8 21.4 25.2 27.6 29.8l5.3 3.9h103.3l5.3-3.9c7-5.2 20.5-21.1 32.4-35.7zM550 660.9c1.3 5.3 2.9 10.3 4.6 15H296.5c-88.9 0-161.1-72.3-161.1-161.1 0-88.9 72.3-161.1 161.1-161.1 51.1 0 99.6 24.6 129.9 65.8 6.5 8.9 19.1 10.8 28 4.3 8.9-6.5 10.8-19.1 4.3-28-18.3-24.9-42.4-45.5-69.8-59.7-8-4.1-16.2-7.7-24.7-10.7C403.6 234 493.8 174 594.6 174c136.9 0 248.6 110.3 250.9 246.7-10.7-19.8-22.6-35.7-33.6-47.9-32.5-36.3-64.8-50.4-66.1-51l-7.9-3.4-7.9 3.4c-1.4 0.6-33.7 14.7-66.1 51-28.5 31.8-62.9 87.6-68 174.3-18.4 15.4-60 57.9-45.9 113.8z m225 42.8h-74.4c-0.3-0.4-0.7-0.7-1-1.1-0.1-0.1-0.2-0.2-0.2-0.3-0.4-0.4-0.7-0.8-1.1-1.2-8.8-9.8-23.5-27.9-35.6-43.7l-9.6-12.5-14.4 6.4c-0.7 0.3-1.4 0.6-2 1l-0.6 0.3-1.5 0.9c-0.2 0.1-0.4 0.2-0.6 0.4l-1.8 1.2c-0.2 0.2-0.4 0.3-0.6 0.5l-1.2 0.9c-0.3 0.2-0.5 0.5-0.8 0.7-0.3 0.3-0.6 0.6-1 0.9-0.5 0.5-1 0.9-1.4 1.4l-0.8 0.8c-0.3 0.4-0.7 0.7-1 1.1-0.2 0.2-0.4 0.4-0.5 0.6-0.4 0.4-0.7 0.9-1.1 1.3l-0.1 0.1-2.4 3.3-0.1 0.1-1.2 1.8-0.1 0.1c-1.2 1.9-2.3 4-3.3 6.2-0.5 1.1-1 2.2-1.6 3.4 0 0.1-0.1 0.1-0.1 0.2-0.3 0.6-0.5 1.2-0.8 1.8-0.3 0.7-0.6 1.4-0.8 2.1-0.2 0.4-0.3 0.8-0.5 1.3-0.3 0.9-0.7 1.8-1 2.7-0.1 0.2-0.2 0.5-0.2 0.7-0.4 1.1-0.7 2.2-1.1 3.4-0.5-0.4-1-0.9-1.5-1.4l-1.3-1.3-0.2-0.2c-4-4.1-8.2-9.6-11.8-16.8-0.4-0.9-0.9-1.8-1.3-2.7 0-0.1-0.1-0.1-0.1-0.2l-1.2-2.7c0-0.1-0.1-0.2-0.1-0.3-0.4-0.9-0.7-1.8-1-2.7-0.1-0.2-0.1-0.3-0.2-0.5l-0.9-2.7c-0.1-0.2-0.2-0.4-0.2-0.7-0.3-0.9-0.6-1.8-0.8-2.7-0.1-0.3-0.2-0.5-0.2-0.8-0.3-1.2-0.7-2.4-1-3.7-10.7-42.6 37.6-77.4 38-77.7l8.2-5.7 0.3-10c2.1-63.5 21.2-116.2 56.9-156.8 17.9-20.3 35.7-32.4 45.6-38.2 9.9 5.8 27.7 17.9 45.6 38.2 1.4 1.6 2.7 3.2 4 4.8 0.4 0.5 0.7 0.9 1.1 1.4 1 1.3 2 2.5 3 3.8l0.9 1.2c1.3 1.6 2.5 3.3 3.7 5 0.2 0.3 0.4 0.6 0.7 0.9 1 1.4 2 2.8 3 4.3 0.3 0.5 0.6 1 1 1.4 1 1.5 2 3.1 3 4.7 0.1 0.2 0.3 0.4 0.4 0.6l3.3 5.4c0.2 0.4 0.5 0.8 0.7 1.2 0.9 1.5 1.7 3 2.5 4.5 0.2 0.4 0.5 0.9 0.7 1.3 1 1.9 2 3.8 3 5.8 0.9 1.9 1.9 3.8 2.7 5.8 0.2 0.4 0.4 0.9 0.6 1.3 0.8 1.7 1.5 3.4 2.3 5.2 0.1 0.3 0.2 0.6 0.4 0.8 0.9 2 1.7 4.1 2.5 6.2 0.1 0.3 0.2 0.5 0.3 0.8 0.7 1.8 1.4 3.7 2 5.5 0.1 0.4 0.3 0.8 0.4 1.2 1.5 4.2 2.8 8.6 4.1 12.9 0.1 0.4 0.2 0.7 0.3 1.1 0.5 1.9 1.1 3.9 1.6 5.8 0.1 0.3 0.2 0.7 0.3 1 1.1 4.3 2.1 8.7 2.9 13.1 0.1 0.4 0.2 0.9 0.3 1.3l0.9 5.1 0.3 1.5c0.3 1.8 0.6 3.5 0.8 5.3 0.1 0.4 0.1 0.7 0.2 1.1l0.9 6.6c0.3 2.1 0.5 4.3 0.7 6.4 0.1 0.6 0.1 1.2 0.2 1.9 0.1 1.6 0.3 3.1 0.4 4.7 0.1 0.7 0.1 1.5 0.2 2.2 0.1 1.6 0.2 3.1 0.3 4.7 0 0.7 0.1 1.3 0.1 2 0.1 2.2 0.2 4.5 0.3 6.7l0.3 10 5.5 3.8 2.7 1.9c0.5 0.3 48.8 35.1 38.1 77.8C881.8 671 873 683 865 690.1c-6.4-20.8-15.6-33.6-27.9-39.1l-14.4-6.4-9.6 12.5c-13.3 17.6-29.8 37.8-38.1 46.6z" fill="#660a80"/>
                        <path d="M613 683.6c-0.3 0.9-0.7 1.8-1 2.7 0.4-0.9 0.7-1.8 1-2.7zM614.3 680.3c-0.3 0.7-0.6 1.4-0.8 2.1 0.3-0.8 0.5-1.5 0.8-2.1zM611.8 687c-0.4 1.1-0.7 2.2-1.1 3.4 0.4-1.2 0.7-2.3 1.1-3.4zM699.3 702.3c-0.4-0.4-0.7-0.8-1.1-1.2 0.4 0.4 0.8 0.8 1.1 1.2zM634 653.8l-1.8 1.2 1.8-1.2zM631.5 655.5l-1.2 0.9c0.5-0.3 0.9-0.6 1.2-0.9zM629.6 657.1c-0.3 0.3-0.6 0.6-1 0.9 0.3-0.3 0.7-0.6 1-0.9zM636 652.6l-1.5 0.9 1.5-0.9zM638.6 651.3c-0.7 0.3-1.4 0.6-2 1 0.7-0.4 1.4-0.7 2-1zM700.6 703.7c-0.3-0.4-0.7-0.7-1-1.1 0.3 0.3 0.7 0.7 1 1.1zM615.1 678.3c0 0.1-0.1 0.1-0.1 0.2 0.1-0.1 0.1-0.1 0.1-0.2zM627.2 659.4l-0.8 0.8 0.8-0.8zM621.4 666.7l-0.1 0.1s0-0.1 0.1-0.1zM620.1 668.6l-0.1 0.1c0.1 0 0.1 0 0.1-0.1zM623.8 663.3l-0.1 0.1 0.1-0.1zM625.4 661.3c-0.2 0.2-0.4 0.4-0.5 0.6 0.2-0.1 0.3-0.4 0.5-0.6zM817.7 454.3c0.8 1.7 1.5 3.4 2.3 5.2-0.7-1.7-1.5-3.5-2.3-5.2zM814.4 447.2c0.9 1.9 1.9 3.8 2.7 5.8-0.9-1.9-1.8-3.9-2.7-5.8zM830 488.1c0.5 1.9 1.1 3.9 1.6 5.8-0.6-1.9-1.1-3.8-1.6-5.8zM836.2 515.9c0.3 1.8 0.6 3.5 0.8 5.3-0.2-1.7-0.5-3.5-0.8-5.3zM823.1 467.3zM825.6 474.1c1.5 4.2 2.8 8.6 4.1 12.9-1.3-4.4-2.6-8.7-4.1-12.9zM820.4 460.3c0.9 2 1.7 4.1 2.5 6.2-0.9-2-1.7-4.1-2.5-6.2zM837.2 522.4l0.9 6.6-0.9-6.6zM835 509.3l0.9 5.1-0.9-5.1zM595.9 670.7c3.6 7.1 7.7 12.6 11.8 16.8-3-3.1-6.1-6.9-8.9-11.6-1-1.6-1.9-3.3-2.9-5.2z" fill="#660a80"/>
                        <path d="M668.4 664.8c-2-2.5-3.9-5-5.8-7.4 12.1 15.7 26.8 33.9 35.6 43.7-0.9-0.9-1.8-2-2.7-3.1-7.4-8.5-17.6-21-27.1-33.2zM834.7 508c-0.9-4.4-1.9-8.8-2.9-13.1 0.6 2.3 1.1 4.6 1.6 6.9 0.5 2.1 0.9 4.2 1.3 6.2zM839 537.3c0.1 1.6 0.3 3.1 0.4 4.7-0.1-1.6-0.3-3.1-0.4-4.7zM838.1 529c0.3 2.1 0.5 4.3 0.7 6.4-0.2-2.1-0.5-4.3-0.7-6.4zM839.6 544.2c0.1 1.6 0.2 3.1 0.3 4.7-0.1-1.5-0.2-3.1-0.3-4.7zM840 551c0.1 2.2 0.2 4.5 0.3 6.7-0.1-2.3-0.2-4.5-0.3-6.7zM590.9 658.4c-0.3-0.9-0.6-1.8-0.8-2.7 0.2 0.9 0.5 1.8 0.8 2.7zM592 661.7l-0.9-2.7c0.3 1 0.6 1.9 0.9 2.7zM609.2 689l-1.3-1.3 1.3 1.3zM589.8 654.9c-0.3-1.2-0.7-2.4-1-3.7 0.3 1.2 0.6 2.5 1 3.7zM595.9 670.7c-0.4-0.9-0.9-1.8-1.3-2.7 0.5 1 0.9 1.8 1.3 2.7zM783.4 400.9c1.4 1.6 2.7 3.2 4 4.8-1.3-1.6-2.6-3.2-4-4.8zM593.3 664.9c-0.4-0.9-0.7-1.8-1-2.7 0.3 0.9 0.6 1.8 1 2.7zM594.6 667.9l-1.2-2.7 1.2 2.7zM788.6 407c1 1.3 2 2.5 3 3.8-1-1.2-2-2.5-3-3.8zM804.2 429l3.3 5.4-3.3-5.4zM800.8 423.7c1 1.5 2 3.1 3 4.7-1-1.6-2-3.2-3-4.7zM808.2 435.7c0.9 1.5 1.7 3 2.5 4.5-0.8-1.6-1.6-3.1-2.5-4.5zM811.4 441.5zM792.5 412c1.3 1.6 2.5 3.3 3.7 5-1.2-1.6-2.4-3.3-3.7-5zM796.9 418c1 1.4 2 2.8 3 4.3-1-1.5-2-2.9-3-4.3z" fill="#660a80"/>
                        <path d="M735.5 464.2c-20.1 0-36.5 16.4-36.5 36.5s16.4 36.5 36.5 36.5 36.5-16.4 36.5-36.5-16.4-36.5-36.5-36.5z" fill="#FFFFFF"/>
                        <path d="M735.5 444.2c-31.2 0-56.5 25.4-56.5 56.5 0 31.2 25.4 56.5 56.5 56.5s56.5-25.4 56.5-56.5-25.3-56.5-56.5-56.5z m0 93.1c-20.1 0-36.5-16.4-36.5-36.5s16.4-36.5 36.5-36.5 36.5 16.4 36.5 36.5-16.4 36.5-36.5 36.5zM709 762.9c-5.5 0-10 4.5-10 10v99.4c0 5.5 4.5 10 10 10s10-4.5 10-10v-99.4c0-5.5-4.5-10-10-10z" fill="#1c139a"/>
                        <path d="M770.6 752.9c-11 0-20 9-20 20v28.8c0 11 9 20 20 20s20-9 20-20v-28.8c0-11.1-9-20-20-20zM678.3 255.1c2.1-5.1-0.3-11-5.4-13.1-78.2-32.3-135.6-15.6-170 4.1-37.3 21.4-55.8 50.4-56.6 51.6-2.9 4.7-1.5 10.8 3.1 13.8 1.7 1 3.5 1.5 5.3 1.5 3.3 0 6.6-1.7 8.5-4.7 0.2-0.3 16.6-26 49.6-44.9 44.3-25.4 95.6-26.4 152.4-3 5.1 2.3 11-0.2 13.1-5.3z" fill="#660a80"/>
                        </g>
                        </svg> --}}
                {{-- </div>
            </div> --}}
            <div class="service-img-text text-center">Datová úložiště na MS SQL a Azure</div>
        </div>
        <div class="col-md-4">
            {{-- <div class="img-servic-wrap">
                <img src="{{ asset('services/service3.png') }}" alt="" class="image-service">
            </div> --}}
            <div class="img-servic-wrap">
                <img src="{{ asset('svg/Custom_vizualizace_pro_vase_produkty.svg') }}" class="image-service" alt="Custom vizualizace pro vaše produkty">
            </div>
            {{-- <div class="svg-icon-service-wrap">
                <div class="svg-icon-service">
                    <svg width="100%" height="100%" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                        <g id="SVGRepo_iconCarrier">

                        <path d="M510 508.4m-210.8 0a210.8 210.8 0 1 0 421.6 0 210.8 210.8 0 1 0-421.6 0Z" fill="#E6E6E6"/>

                        <path d="M510 363.4c-80 0-145 65.1-145 145s65.1 145 145 145 145-65.1 145-145-65-145-145-145z" fill="#FFFFFF"/>

                        <path d="M510 343.4c-91 0-165 74-165 165s74 165 165 165 165-74 165-165-74-165-165-165z m0 310.1c-80 0-145-65.1-145-145s65.1-145 145-145 145 65.1 145 145-65 145-145 145z" fill="#1c139a"/>

                        <path d="M795.4 488.4H760c-4.7-59.5-30-114.7-72.7-157.4s-98.1-68.1-157.7-72.7v-36.6c0-11-9-20-20-20s-20 9-20 20v36.7c-59.3 4.7-114.5 30.1-157 72.6-42.6 42.6-68 97.9-72.7 157.4H226c-11 0-20 9-20 20s9 20 20 20h34c4.7 59.5 30 114.7 72.7 157.4 42.5 42.5 97.7 67.9 157 72.6v35.5c0 11 9 20 20 20s20-9 20-20v-35.4c59.6-4.6 115-30 157.7-72.7 42.6-42.6 68-97.9 72.7-157.4h35.4c11 0 20-9 20-20s-9-20-20.1-20zM529.7 718.3v-51.9c0-11-9-20-20-20s-20 9-20 20v51.8c-100.1-9.6-180-89.6-189.5-189.8h52.6c11 0 20-9 20-20s-9-20-20-20h-52.6c9.5-100.2 89.4-180.2 189.5-189.8v50.3c0 11 9 20 20 20s20-9 20-20v-50.3c100.5 9.3 180.7 89.5 190.2 189.9h-49.5c-11 0-20 9-20 20s9 20 20 20h49.5c-9.5 100.4-89.8 180.5-190.2 189.8z" fill="#660a80"/>

                        <path d="M880.4 158c0-11-9-20-20-20H510c-50 0-98.5 9.8-144.2 29.1-44.1 18.7-83.7 45.4-117.7 79.4-34 34-60.7 73.6-79.4 117.7-19.3 45.7-29.1 94.2-29.1 144.2 0 11 9 20 20 20s20-9 20-20C179.6 326.2 327.8 178 510 178h281.3v54.5c0 8.9 10.7 13.3 17 7l67.1-67.1c1.6-1.6 2.5-3.4 2.8-5.3 1.4-2.7 2.2-5.8 2.2-9.1zM860.4 488.4c-11 0-20 9-20 20 0 182.2-148.2 330.4-330.4 330.4H230.3V783c0-8.9-10.7-13.3-17-7l-67.1 67.1c-1 1-1.8 2.2-2.3 3.4-2.7 3.4-4.3 7.7-4.3 12.4 0 11 9 20 20 20H510c50 0 98.5-9.8 144.2-29.1 44.1-18.7 83.7-45.4 117.7-79.4 34-34 60.7-73.6 79.4-117.7 19.3-45.7 29.1-94.2 29.1-144.2 0-11.1-8.9-20.1-20-20.1z" fill="#660a80"/>

                        </g>

                        </svg>
                </div>
            </div> --}}
            <div class="service-img-text text-center">Custom vizualizace pro vaše produkty</div>
        </div>
    </div>
</div>
<div class="wrap-service-body">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6">
                <div class="service-box-wrap">
                    <div class="service-box-title">
                        <h3 class="text-center ">Systém firemního reportování</h3>
                    </div>
                    <div class="service-block-text">Stavíme datové sklady a integrujeme komplexní BI-analytická řešení pro velké společnosti.</div>
                    <div class="service-block-bottom pt-5">
                        <div class="service-block-bottom-img">
                            <img src="{{ asset('services/service4.png') }}" alt="" class="image-service-block">
                        </div>
                        <div class="service-block-button">
                            <a href="{{ route('service.system_firm_report') }}" class="btn btn-primary">Více informace</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-wrap">
                    <div class="service-box-title">
                        <h3 class="text-center ">Netradiční vizualizace dat</h3>
                    </div>
                    <div class="service-block-text">Vyvíjíme unikátní produkty přizpůsobené vašemu systému a adaptované pro vaše nosiče, specializované na složité KPI.</div>
                    <div class="service-block-bottom pt-5">
                        <div class="service-block-bottom-img">
                            <img src="{{ asset('services/service5.png') }}" alt="" class="image-service-block">
                        </div>
                        <div class="service-block-button">
                            <a href="{{ route('service.netradicni_vizualizace_dat') }}" class="btn btn-primary">Více informace</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-wrap">
                    <div class="service-box-title">
                        <h3 class="text-center ">Osobní konzultace</h3>
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
                        <h3 class="text-center ">První manažerský dashboard</h3>
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
    <h3 class="text-center">Individuální přístup k cenotvorbe každého projektu</h3>
    <div class="row justify-content-center">
        <img src="{{ asset('services/service8.png') }}" alt="" class="image-service-8">
    </div>
    <div class="row align-items-center pb-3">
        <h5 class="text-center">
            Neexistuje univerzální ceník, cena každého dashboardu se posuzuje zvlášť.
        </h5>
    </div>
    <h3 class="text-center pb-3">
        Klíčové faktory:
    </h3>
    <ul class="service-factors-list">
        <li>
            <strong>Kvalita dat:</strong> Vaše data přímo ovlivňují složitost práce.
        </li>
        <li>
            <strong>Počet databází:</strong> Čím více jich je, tím složitější je integrace.
        </li>
    </ul>
</div>
<div class="wrap-service-body">
    <div class="container container-block-form">
        <div class="contact-form-wrap">
            @include('contact.blocks.form')
        </div>
    </div>
</div>

@endsection
