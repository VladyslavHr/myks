<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        return view('services.index',[

        ]);
    }

    public function system_firm_report(){
        return view('services.system_firm_report', [

        ]);
    }

    public function netradicni_vizualizace_dat(){
        return view('services.netradicni_vizualizace_dat', [

        ]);
    }
}
