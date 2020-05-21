<?php

namespace AlexMK92\StockService\Providers;

use AlexMK92\StockService\Http\StockServiceController;
use Illuminate\Support\ServiceProvider;

class StockServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(dirname(__DIR__, 1) . '/routes/api.php');
    }

    public function register()
    {

    }
}
