<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vimeo\Vimeo;

class VimeoVideoController extends Controller
{
    public function index()
    {
        return view('admin.vimeo.index');
    }

    public function create()
    {
        return view('admin.vimeo.create');
    }

    public function store(Request $request)
    {
        $client = new Vimeo("2ba9eb4997ad856fc28a14c67bb24768131948c0", "8tL0ZVm+xZxFlqqvj3Wubb4TdAc5v3GUnfHiGrz4SQhN/GNfDYFRGXUqy7T+Qr8UF+mqGxhoq8I1VZb0pRW3txsEqMye2a9MiJfz2TL07T/A9o5fd7Ol8IVsQALq0DHp", "839b1dc2e2be5a64917bec053b766d47");

        $file_name = "{path_to_a_video_on_the_file_system}";
        $uri = $client->upload($file_name, array(
        "name" => "Untitled",
        "description" => "The description goes here."
        ));

        echo "Your video URI is: " . $uri;
    }
}
