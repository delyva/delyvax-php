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

The recommended way to install Rekamy Generator is through Composer.

```bash
composer require delyva/saas
```

Next, you will need to publish the generator's config file by running :

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

## License

DelyvaX SaaS is open-sourced software licensed under the MIT license
