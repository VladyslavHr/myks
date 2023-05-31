<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trick;

class TrickController extends Controller
{
    public function index()
    {
        $tricks = Trick::get();

        return view('trick.index', [
            'tricks' => $tricks,
        ]);
    }
}
