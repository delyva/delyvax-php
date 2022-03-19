# DelyvaX Delyva

## Introduction

DelyvaX Delyva

## Table Of Contents

<details><summary>Click to expand</summary><p>

- [Introduction](#introduction)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [License](#license)

</p></details>

## Installation

```bash
composer require delyvax/delyva
```

Next, you will need to publish the delyva's config file by running :

```bash
php artisan vendor:publish --provider "DelyvaX\Delyva\DelyvaServiceProvider"
```

## Configuration

Update the configuration file based on your needs.

```php
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
    'delyva_endpoint' => env('DELYVA_ENDPOINT', 'https://api.delyva.app/v1.0/'),

    /**
     * DelyvaX CDN Endpoint
     */
    'delyva_cdn_endpoint' => env('DELYVA_CDN_ENDPOINT', 'https://cdn.delyva.app/'), 

    /**
     * DelyvaX Company Code
     */
    'delyva_company_code' => env('DELYVA_COMPANY_CODE', 'my')
```

## Usage

(Optional) Publish configuration :

```bash
php artisan vendor:publish --tag="delyva"
```

Please replace with your own configuration in the .env file
```bash
DELYVA_ENDPOINT="https://api.delyva.app/v1.0/"
DELYVA_ACCESS_TOKEN="DELYVA_ACCESS_TOKEN"
DELYVA_COMPANY_CODE="DELYVA_COMPANY_CODE"
DELYVA_COMPANY_ID="DELYVA_COMPANY_ID"
DELYVA_CUSTOMER_ID="DELYVA_CUSTOMER_ID"
```

## License

DelyvaX Delyva is open-sourced software licensed under the MIT license
