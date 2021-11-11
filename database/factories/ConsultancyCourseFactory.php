<?php

namespace Database\Factories;

use App\Models\ConsultancyCourse;
use App\Models\Consultancy;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultancyCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ConsultancyCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "consultancy_id" => Consultancy::inRandomOrder()->first()->id,
            "course_id" => Course::inRandomOrder()->first()->id,
            "price" => rand(4000 , 20000),
            "course_duration" => rand(1 , 12),
            "description" => $this->faker->paragraph(),
            "average_score" =>rand(700 , 1700),
            "class_size" =>rand(20 , 150),
        ];
    }
}
