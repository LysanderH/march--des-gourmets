<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Exhibitor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Exhibitor::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'company';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'company',
    ];

    /**
     * Modify label displayed in menu.
     *
     * @return string
     */
    public static function label()
    {
        return 'Exposants';
    }

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
            Text::make('Nom d’entreprise', 'company')->sortable(),
            Boolean::make('Accepté', 'accepted')->sortable(),
            Text::make('Nom', 'name')->hideFromIndex(),
            Text::make('Prénom', 'firstname')->hideFromIndex(),
            Text::make('Email', 'email')->hideFromIndex(),
            Text::make('Description', 'description')->hideFromIndex(),
            new Panel('Adresse', $this->addressFields()),
            BelongsToMany::make('Categories')
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

    public function addressFields()
    {
        return [
            Text::make('Rue', 'street')->hideFromIndex(),
            Number::make('Numéro de maison', 'house_number')->hideFromIndex(),
            Number::make('Code Postal', 'postal')->hideFromIndex(),
            Text::make('Ville', 'village')->hideFromIndex(),
            Text::make('Pays', 'country'),
        ];
    }
}
