<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Whitecube\NovaPage\Pages\Manager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Manager $pages)
    {
        // $pages->register('option', 'Partenaires', \App\Nova\Templates\FooterOptions::class);
        $pages->register('option', 'Prix', \App\Nova\Templates\PriceOptions::class);
        $pages->register('option', 'Horaires', \App\Nova\Templates\TimetableOptions::class);
        $pages->register('option', 'Informations de contact', \App\Nova\Templates\InformationOptions::class);
    }
}
