<?php

namespace Delyvax\Delyva\Services;

use GuzzleHttp\Client;

class Customer
{
    public static function customerDetails($hydrate = false)
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

    public static function userDetails($hydrate = false)
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
