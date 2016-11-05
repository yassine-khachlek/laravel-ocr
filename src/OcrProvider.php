<?php

namespace Yk\LaravelOcr;

use Illuminate\Support\ServiceProvider;

class OcrProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('Ocr', function(){
            return $this->app->make('Yk\LaravelOcr\Classes\Ocr');
        });

    }
}
