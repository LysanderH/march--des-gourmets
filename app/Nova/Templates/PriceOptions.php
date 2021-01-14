<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;
use Whitecube\NovaPage\Pages\Template;

class PriceOptions extends Template
{

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Currency::make('Prix enfants moin de 16 ans', 'price_children')->required()->min(0)->max(100)->locale('be'),
            Currency::make('Prix adultes', 'price_adults')->required()->min(0)->max(100)->locale('be'),
            Currency::make('Prix exposants', 'price_exhibitors')->required()->min(0)->max(1000)->locale('be')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }
}
