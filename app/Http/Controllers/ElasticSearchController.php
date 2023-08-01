<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElasticSearchController extends Controller
{
    public function elasticSearch()
    {
        $client = ClientBuilder::create()
        ->setElasticCloudId('d6f0891b42d04b2ebe15893ede1a0896:dXMtY2VudHJhbDEuZ2NwLmNsb3VkLmVzLmlvOjQ0MyQ4NWZlMWQ4ZWY3YWM0NzllYmE4MmRhNjcwZjk1Mjc0YSRlODEyOGYxN2IxMzg0ZmEwOWM0NjdiZWIyNzIwNzg1Mg==')
        ->setApiKey('UWI3ZGdJZ0JHeFRLNXZ2ZC1sMm06R3FTbGFzbVdTekcyc1NVcFdjSTFndw==')
        ->build();
    }

}
