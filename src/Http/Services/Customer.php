<?php

namespace Delyvax\Delyva\Http\Services;

use GuzzleHttp\Client;

class Customer
{
    public function customerDetails($hydrate = false)
    {
        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('delyva.delyva_access_token')
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('GET', config('delyva.delyva_endpoint') . 'customer', $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public function userDetails($hydrate = false)
    {
        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('delyva.delyva_access_token')
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('GET', config('delyva.delyva_endpoint') . 'user', $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }
}
