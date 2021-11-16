<?php

namespace Database\Factories;

use App\Models\ConsultancyCountry;
use App\Models\Consultancy;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultancyCountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ConsultancyCountry::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
          return [
              "consultancy_id" => Consultancy::inRandomOrder()->first()->id,
              "country_id" => Country::inRandomOrder()->first()->id,
          ];
    }
}
