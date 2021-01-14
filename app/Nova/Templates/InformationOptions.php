<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use Dniccum\PhoneNumber\PhoneNumber;
use Whitecube\NovaPage\Pages\Template;
use Wotta\IbanValidation\IbanValidation;

class InformationOptions extends Template
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
            new Panel('Informations du responsable', $this->responsibleFields()),
            new Panel('Informations de contact du marché', $this->contactInfoFields()),
            new Panel('Informations bancaires', $this->marketContactFields()),
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

    public function responsibleFields()
    {
        return [
            Text::make('Nom', 'responsible_name'),
            Text::make('Rue et numéro de maison', 'responsible_address')->help('Par ex. "Rue Neuve 55"'),
            Text::make('Code postal et ville', 'responsible_village')->help('Par ex. "4000 Liège"'),
        ];
    }

    public function contactInfoFields()
    {
        return [
            PhoneNumber::make('Téléphone fix', 'contact_phone')->country('BE')->format('+32 (0) ### ## ## ##')->disableValidation(),
            PhoneNumber::make('GSM', 'contact_mobile')->country('BE')->format('+32 (0) ### ## ## ##')->disableValidation(),
            Text::make('Adresse mail', 'contact_email')->rules('required', 'email', 'max:254')
                ->creationRules('email')
                ->updateRules('email'),
        ];
    }

    public function marketContactFields()
    {
        return [
            Text::make('Nom du propriétaire de compte', 'contact_name'),
            Text::make('IBAN', 'contact_iban')->rules('required', 'max:32', 'regex:/^([A-Z]{2}[ \-]?[0-9]{2})(?=(?:[ \-]?[A-Z0-9]){9,30}$)((?:[ \-]?[A-Z0-9]{3,5}){2,7})([ \-]?[A-Z0-9]{1,3})?$/'),
            Text::make('Bic', 'contact_bic')->rules('required', 'max:8'),
        ];
    }
}
