<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LanguagesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'laravellocalization.supportedLocales' => [
                'uz' => array( 'name' => 'Ўзбекча', 'script' => 'Cyrl', 'native' => 'Ўзбекча' ),
                'oz' => array( 'name' => 'O’zb', 'script' => 'Latn', 'native' => 'O’zb' ),
            ],

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => false
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
