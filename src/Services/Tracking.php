<?php

namespace DelyvaX\Services;

use GuzzleHttp\Client;

class Tracking
{
    public function orderHistory($consignmentNo, $hydrate = false)
    {
        $url = config('delyva.delyva_endpoint') . "order/track/{$consignmentNo}?companyId=" . config('delyva.delyva_company_id');

        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('delyva.delyva_access_token')
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('GET', $url, $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public function ETA($consignmentNo, $hydrate = false)
    {
        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('delyva.delyva_access_token')
            ],
            'json'    => [
                'companyId' => config('delyva.delyva_company_id'),
                'consignmentNo' => $consignmentNo,
                'resultType' => 'latestFirst'
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('POST', config('delyva.delyva_endpoint') . 'order/track', $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }
}
