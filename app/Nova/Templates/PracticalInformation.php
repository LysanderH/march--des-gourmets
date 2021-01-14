<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Khalin\Nova\Field\Link;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Whitecube\NovaPage\Pages\Template;

class PracticalInformation extends Template
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
            new Panel('Accès', $this->accessFields()),
            new Panel('Informations', $this->infoFields()),
            new Panel('Élément distinctif 1', $this->featureThreeFields()),
            new Panel('Élément distinctif 2', $this->featureFourFields()),
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

    public function accessFields()
    {
        return [
            Textarea::make('Accès en voiture', 'access_car'),
            Textarea::make('Accès en transport commun', 'access_public'),
        ];
    }

    public function infoFields()
    {
        return [
            Image::make('Image bancontact', 'info_bancontact_img'),
            Textarea::make('Description', 'info_description_one'),
            Image::make('Image animaux de companie', 'info_animal_img'),
            Textarea::make('Description', 'info_description_two'),
        ];
    }

    public function featureThreeFields()
    {
        return [
            Text::make('Titre', 'feature_three_title'),
            Textarea::make('Contenu', 'feature_three_content'),
            Image::make('Ajouter une image', 'feature_three_img'),
            Text::make('Label du lien', 'feature_three_link_label'),
            Link::make('Url', 'feature_three_link'),
            Boolean::make('Ouvrir le lien dans un nouvel onglet', 'feature_three_blank')
        ];
    }

    public function featureFourFields()
    {
        return [
            Text::make('Titre', 'feature_four_title'),
            Textarea::make('Contenu', 'feature_four_content'),
            Image::make('Ajouter une image', 'feature_four_img'),
            Text::make('Label du lien', 'feature_four_link_label'),
            Link::make('Url', 'feature_four_link'),
            Boolean::make('Ouvrir le lien dans un nouvel onglet', 'feature_four_blank')
        ];
    }
}
