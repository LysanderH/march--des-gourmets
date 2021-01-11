<?php

namespace App\Nova\Templates;


use Illuminate\Http\Request;
use Khalin\Nova\Field\Link;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Whitecube\NovaPage\Pages\Template;

class Home extends Template
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
            Image::make('Image de fond', 'bcg_img')->hideFromIndex(),
            new Panel('Message d’accueil', $this->welcomeMessageFields()),
            new Panel('Premier élément disctinctif', $this->featureOneFields()),
            new Panel('Les projets soutenus', $this->supportedProjectsFields()),
            new Panel('Deuxième élément disctinctif', $this->featureTwoFields()),
            new Panel('Section exposant', $this->exhibitorCTAFields()),
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
     * Groups the fields for the welcome message
     * on homepage
     *
     */
    public function welcomeMessageFields()
    {
        return [
            Text::make('Titre du message d’accueil', 'welcome_title')->hideFromIndex(),
            Textarea::make('Texte du message d’accueil', 'welcome_text')->hideFromIndex()
        ];
    }

    /**
     * Groups the fields for the first feature
     * on homepage
     *
     */
    public function featureOneFields()
    {
        return [
            Text::make('Titre', 'feature_title'),
            Textarea::make('Contenu', 'feature_content'),
            Image::make('Ajouter une image', 'feature_img')
                ->help('Veuillez choisir une image qui fait moins de 1200x1200 et moins de 2 Mo.'),
            Text::make('Label du lien', 'feature_link_label'),
            Link::make('Url', 'feature_link'),
            Boolean::make('Ouvrir le lien dans un nouvel onglet', 'feature_blank')
        ];
    }

    public function supportedProjectsFields()
    {
        return [
            Text::make('1. Titre', 'supported_title_one'),
            Textarea::make('1. Contenu', 'supported_content_one'),
            Image::make('1. Ajouter une image', 'supported_img_one'),
            Text::make('2. Titre', 'supported_title_two'),
            Textarea::make('2. Contenu', 'supported_content_two'),
            Image::make('2. Ajouter une image', 'supported_img_two'),
            Text::make('3. Titre', 'supported_title_three'),
            Textarea::make('3. Contenu', 'supported_content_three'),
            Image::make('3. Ajouter une image', 'supported_img_three'),
            Text::make('Label du lien', 'supported_link_label'),
            Link::make('Url', 'supported_link')->placeholder('https://www.exemple.com'),
            Boolean::make('Ouvrir le lien dans un nouvel onglet', 'supported_blank')
        ];
    }

    public function featureTwoFields()
    {
        return [
            Text::make('Titre', 'feature_two_title'),
            Textarea::make('Contenu', 'feature_two_content'),
            Image::make('Ajouter une image', 'feature_two_img'),
            Text::make('Label du lien', 'feature_two_link_label'),
            Link::make('Url', 'feature_two_link'),
            Boolean::make('Ouvrir le lien dans un nouvel onglet', 'feature_two_blank')
        ];
    }

    public function  exhibitorCTAFields()
    {
        return [
            Text::make('Titre', 'exhibitor_cta_title'),
            Image::make('Ajouter une image', 'exhibitor_cta_img'),
            Text::make('Label du lien', 'exhibitor_cta_link_label'),
            Link::make('Url', 'exhibitor_cta_link'),
            Boolean::make('Ouvrir le lien dans un nouvel onglet', 'exhibitor_cta_blank')
        ];
    }
}
