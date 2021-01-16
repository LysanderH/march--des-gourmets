<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Selling extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Selling::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'first-name',
        'email',
        'tel',
        'checktoken',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Nom', 'name')->sortable(),
            Text::make('Prénom', 'first-name')->hideFromIndex(),
            Text::make('Email', 'email')->rules('email')->hideFromIndex(),
            Text::make('Téléphone', 'tel')->hideFromIndex(),
            Text::make('Nom de rue', 'street')->hideFromIndex(),
            Number::make('Numéro de maison', 'number')->rules('min:0')->hideFromIndex(),
            Text::make('Code postal', 'postal')->hideFromIndex(),
            Text::make('Ville', 'town')->hideFromIndex(),
            Text::make('Pays', 'country')->hideFromIndex(),
            Number::make('Tickets enfants', 'children')->hideFromIndex(),
            Number::make('Tickets adultes', 'adults')->hideFromIndex(),
            Currency::make('Total enfants', 'total_children')->hideFromIndex(),
            Currency::make('Total adultes', 'total_adults')->hideFromIndex(),
            Currency::make('Total', 'total_adults')->hideFromIndex(),
            Text::make('Chaine de sécurité', 'checktoken')->default(function ($request) {
                return md5(rand(1, 10) . microtime());
            })->sortable(),
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

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
