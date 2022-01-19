<?php

namespace Delyvax\Saas\Http\Traits;

use GuzzleHttp\Client;

trait Webhook
{
    public function subscribe($data, $hydrate = false)
    {
        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('saas.delyva_access_token')
            ],
            'json'    => $data
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('POST', config('saas.delyva_endpoint') . 'webhook', $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public function listWebhooks($hydrate = false)
    {
        $url = config('saas.delyva_endpoint') . 'webhook';

        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('saas.delyva_access_token')
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('GET', $url, $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public function webhook($webhookId, $event, $url, $hydrate = false)
    {
        $url = config('saas.delyva_endpoint') . 'webhook/' . $webhookId . '?retrieve=queue';

        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('saas.delyva_access_token')
            ],
            'json'    => [
                'event' => $event,
                'url' => $url
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('GET', $url, $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }

    public function updateWebhook($webhookId, $event, $url, $hydrate = false)
    {
        $url = config('saas.delyva_endpoint') . 'webhook/' . $webhookId . '?retrieve=queue';

        $body = [
            'headers' => [
                'Content-type' => 'application/json',
                'X-Delyvax-Access-Token' => config('saas.delyva_access_token')
            ],
            'json'    => [
                'event' => $event,
                'url' => $url
            ]
        ];

        $client = new Client([
            'verify' => false
        ]);

        $response = $client->request('PATCH', $url, $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }
}
