<?php

namespace WebModularity\LaravelUnify;

use Illuminate\Support\ServiceProvider;

class UnifyServiceProvider extends ServiceProvider
{
    public function boot() {
        // Views
        $viewPath = __DIR__ . 'resources/views';
        $this->loadViewsFrom($viewPath, 'unify');
        $this->publishes([$viewPath => base_path('resources/views/vendor/unify')], 'views');

        // Config
        $configPath = __DIR__ . 'config/unify.php';
        $this->publishes([$configPath => config_path('unify.php')], 'config');

        // Assets
        $this->publishes([__DIR__ . 'resources/assets' => public_path('vendor/unify')], 'assets');
    }
}