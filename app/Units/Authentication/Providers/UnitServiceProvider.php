<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 14-09-2016
 * Time: 0:43
 */

namespace Confee\Units\Authentication\Providers;


use Illuminate\Support\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}