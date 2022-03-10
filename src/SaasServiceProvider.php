<?php

namespace Delyvax\Saas;

use Illuminate\Support\ServiceProvider;

class SaasServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->publishes([
            __DIR__ . '/config/delyva.php' => config_path('delyva.php'),
        ], 'saas');

        $this->mergeConfigFrom(
            __DIR__ . '/config/delyva.php', 'delyva'
        );
    }
}
