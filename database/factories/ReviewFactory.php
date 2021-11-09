<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'writer' => $this->faker->name,
            'email' => $this->faker->email,
            'joined_at' => $this->faker->year,
            'description' => $this->faker->paragraph,
            'course_id' => Course::inRandomOrder()->first()->id,
            'rating' => $this->faker->numberBetween(0,6),
        ];
    }
}
