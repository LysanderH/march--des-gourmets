<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Whitecube\NovaPage\Pages\Template;
use Laraning\NovaTimeField\TimeField;
use Laravel\Nova\Panel;

class TimetableOptions extends Template
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
            new Panel('Horaire du premier jour', $this->DayOne()),
            new Panel('Horaire du deuxième jour', $this->DayTwo()),
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

    public function DayOne()
    {
        return [
            Date::make('Date du premier jour', 'starting_date')->format('D-MM-Y')->resolveUsing(function ($value) {
                return $value;
            }),
            TimeField::make('Heure de début', 'starting_day_one'),
            TimeField::make('Heure de fin', 'ending_day_one'),
        ];
    }
    public function DayTwo()
    {
        return [
            Date::make('Date du deuxième jour', 'ending_date')->format('D-MM-Y')->resolveUsing(function ($value) {
                return $value;
            }),
            TimeField::make('Heure de début', 'starting_day_two'),
            TimeField::make('Heure de fin', 'ending_day_two'),
        ];
    }
}
