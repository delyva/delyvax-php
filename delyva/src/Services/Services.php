<?php

namespace Delyvax\Delyva\Services;

use GuzzleHttp\Client;

/**
 * @method Services
 *
 * @property int $id
 * @property string|null $companyId | Optional if jwt token sent
 * @property array $waypoint | waypoint object
 * @property int $customerId | Customer ID
 * @property object/null $weight | weight object
 * @property string/null $orderId | Instant quote for existing order
 * @property object/null $distance | distance object
 * @property string/null $itemType | Item type, eg: PARCEL
 * @property int/null $itemTypeId | Item type id
 * @property string/null $serviceCode | Service Code
 * @property string/null $serviceCompanyCode | Service Company Code
 * @property string/null $vehicleType | Not In Use
 * @property string/null $promoCode | Promo Code
 * @property object/null $origin | Equivalent to waypoint: [{ ...origin }]
 * @property object/null $destination | Equivalent to waypoint: [{ ...destination }]
 * @property array/null $serviceAddon | Service addon object
 */

class Services
{
    public function priceQuote($data, $hydrate = false)
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

        $response = $client->request('POST', config('delyva.delyva_endpoint') . "service/instantQuote", $body);

        $response = json_decode($response->getBody(), $hydrate);

        return $response;
    }
}
