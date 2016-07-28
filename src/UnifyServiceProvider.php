<?php

namespace WebModularity\LaravelUnify;

use Blade;
use Illuminate\Support\ServiceProvider;
use WebModularity\LaravelUnify\Unify;

class UnifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/unify.php', 'unify');
    }

    public function boot() {
        // Views
        $viewPath = __DIR__ . '/resources/views';
        $this->loadViewsFrom($viewPath, 'unify');
        $this->publishes([$viewPath => base_path('resources/views/vendor/unify')], 'views');

        // Config
        $this->publishes([__DIR__ . '/config/unify.php' => config_path('unify.php')], 'config');

        // Assets
        $this->publishes([__DIR__ . '/resources/assets' => public_path('vendor/unify')], 'assets');
    }
}