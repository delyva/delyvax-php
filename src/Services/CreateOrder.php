<?php

namespace Delyvax\Delyva\Services;

use GuzzleHttp\Client;

class CreateOrder
{
    public static function createOrder($data, $hydrate = false)
    {
        $data['customerId'] = config('delyva.delyva_customer_id');

        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('delyva.delyva_access_token')
            ],
            'json'    => $data
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('POST', config('delyva.delyva_endpoint') . "order", $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public static function printLabel($orderId)
    {
        $url = config('delyva.delyva_endpoint') . "order/{$orderId}/label?companyId=" . config('delyva.delyva_company_id');

        return $url;
    }

    public static function cancelOrder($orderId, $hydrate = false)
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

        $response = $client->request('POST', config('delyva.delyva_endpoint') . "order/{$orderId}/cancel", $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }


    public static function confirmOrder($orderId, $hydrate = false)
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

        $response = $client->request('POST', config('delyva.delyva_endpoint') . "order/{$orderId}/process", $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public static function orderDetails($orderId, $hydrate = false)
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

        $response = $client->request('GET', config('delyva.delyva_endpoint') . "order/{$orderId}", $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }
}
