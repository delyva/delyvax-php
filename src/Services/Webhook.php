<?php

namespace Delyvax\Delyva\Services;

use GuzzleHttp\Client;

class Webhook
{
    public static function subscribe($data, $hydrate = false)
    {
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

        $response = $client->request('POST', config('delyva.delyva_endpoint') . 'webhook', $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public static function listWebhooks($hydrate = false)
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

        $response = $client->request('GET', config('delyva.delyva_endpoint') . 'webhook', $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public static function webhook($webhookId, $event, $url, $hydrate = false)
    {
        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('delyva.delyva_access_token')
            ],
            'json'    => [
                'event' => $event,
                'url' => $url
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('GET', config('delyva.delyva_endpoint') . "webhook/{$webhookId}?retrieve=queue", $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public static function updateWebhook($webhookId, $event, $url, $hydrate = false)
    {
        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('delyva.delyva_access_token')
            ],
            'json'    => [
                'event' => $event,
                'url' => $url
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('PATCH', config('delyva.delyva_endpoint') . "webhook/{$webhookId}?retrieve=queue", $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }
}
