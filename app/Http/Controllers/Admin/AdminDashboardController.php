<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vimeo\Vimeo;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $client = new Vimeo("2ba9eb4997ad856fc28a14c67bb24768131948c0", "8tL0ZVm+xZxFlqqvj3Wubb4TdAc5v3GUnfHiGrz4SQhN/GNfDYFRGXUqy7T+Qr8UF+mqGxhoq8I1VZb0pRW3txsEqMye2a9MiJfz2TL07T/A9o5fd7Ol8IVsQALq0DHp", "839b1dc2e2be5a64917bec053b766d47");

        $response = $client->request('/tutorial', array(), 'GET');
        // dd($response);

        return view('admin.dashboard.index');
    }
}
