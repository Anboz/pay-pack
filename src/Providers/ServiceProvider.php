<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.05.2021
 * Time: 15:05
 */

namespace AlifPay\Providers;

use AlifPay\AlifPayClient;
use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/alif-pay.php' => config_path('alif-pay.php')
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/alif-pay.php', 'alif-pay'
        );

        $this->app->bind(AlifPayClient::class);
    }
}