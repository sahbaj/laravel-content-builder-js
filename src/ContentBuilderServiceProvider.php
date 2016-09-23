<?php

namespace Bglobal\ContentBuilder;
use Illuminate\Support\ServiceProvider;

class ContentBuilderServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([
            __DIR__ . '/config/content-builder.php' => base_path('config/content-builder.php')
                ], 'config');

        $this->publishes([
            __DIR__ . '/assets/' => base_path('public/vendor/content-builder')
                ], 'public');

        $this->loadViewsFrom(__DIR__ . '/resources/view', 'content-builder');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
//
    }

}
