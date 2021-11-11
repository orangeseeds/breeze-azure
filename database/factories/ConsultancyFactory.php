<?php

namespace Database\Factories;

use App\Models\Consultancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consultancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->company(),
            'slug' => $this->faker->unique()->slug(),
            'location' => $this->faker->city,
            'website' => $this->faker->unique()->url(),
            'description' => $this->faker->paragraph(),
            'profile_picture' => Consultancy::inRandomOrder()->whereNotNull('profile_picture')->first()->profile_picture,
            'cover_picture' => Consultancy::inRandomOrder()->whereNotNull('cover_picture')->first()->cover_picture,
        ];
    }
}
