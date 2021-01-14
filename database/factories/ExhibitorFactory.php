<?php

namespace Database\Factories;

use App\Models\Exhibitor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExhibitorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exhibitor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'name' => $this->faker->name(),
            'firstname' => $this->faker->firstName(),
            'email' => $this->faker->unique()->email(),
            'phone' => $this->faker->e164PhoneNumber,
            'street' => $this->faker->streetName,
            'house_number' => $this->faker->buildingNumber,
            'postal' => $this->faker->randomNumber($nbDigits = 4),
            'village' => $this->faker->city,
            'country' => $this->faker->country,
            'description' => $this->faker->text(),
            'accepted' => $this->faker->boolean($chanceOfGettingTrue = 50),
        ];
    }
}
