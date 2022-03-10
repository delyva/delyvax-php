<?php

namespace DelyvaX\Delyva\Services;

use Illuminate\Support\ServiceProvider;

class DelyvaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->publishes([
            __DIR__ . '/config/delyva.php' => config_path('delyva.php'),
        ], 'delyva');

        $this->mergeConfigFrom(
            __DIR__ . '/config/delyva.php', 'delyva'
        );
    }
}
