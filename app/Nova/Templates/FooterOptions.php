<?php

namespace App\Nova\Templates;

use Ctessier\NovaAdvancedImageField\AdvancedImage;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Whitecube\NovaPage\Pages\Template;

class FooterOptions extends Template
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
            Image::make('Partenaire 1', 'footer_img')->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),
            AdvancedImage::make('Partenaire 2', 'footer_img_two')->croppable()->resize(235, 90)->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.')
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
