<?php

return [

    /**
     * DelyvaX Access Token
     */
    'delyva_access_token' => env('DELYVA_ACCESS_TOKEN', ''),

    /**
     * DelyvaX Company Id
     */
    'delyva_company_id' => env('DELYVA_COMPANY_ID', ''),

    /**
     * DelyvaX Customer ID
     */
    'delyva_customer_id' => env('DELYVA_CUSTOMER_ID', ''),

    /**
     * DelyvaX Endpoint
     */
    'delyva_endpoint' => env('DELYVA_ENDPOINT', 'https://api.delyva.app/v1.0'),

    /**
     * DelyvaX CDN Endpoint
     */
    'delyva_cdn_endpoint' => env('DELYVA_CDN_ENDPOINT', 'https://cdn.delyva.app'),

    /**
     * DelyvaX Company Code
     */
    'delyva_company_code' => env('DELYVA_COMPANY_CODE', 'my'),
];
