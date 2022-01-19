<?php

namespace Delyvax\Saas\Http\Traits;

use GuzzleHttp\Client;

trait Customer
{
    public function customerDetails($hydrate = false)
    {
        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('saas.delyva_access_token')
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('GET', config('saas.delyva_endpoint') . 'customer', $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }
}
