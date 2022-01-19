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
            __DIR__ . '/config/saas.php' => config_path('saas.php'),
        ], 'saas');

        $this->mergeConfigFrom(
            __DIR__ . '/config/saas.php', 'saas'
        );
    }
}
