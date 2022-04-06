<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function send(Request $request)
    {
        $data = [];

        $data["from"]=$request["from"];
        $data["to"]=$request["to"];
        $data["message"]=$request["message"];

        $client = new Client(['base_uri' => 'http://127.0.0.1:8000/']);
        $response = $client->request('POST', 'api/data', $data);
        return $response['page_uid'];
    }

    public function get(Request $request)
    {
        $page_uid["page_uid"] = $request["page_uid"];

        $client = new Client(['base_uri' => 'http://127.0.0.1:8000/']);
        $response = $client->request('GET', 'api/data/', $page_uid);
        return $response->getBody();
    }
}
