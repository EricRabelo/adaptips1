<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'genre' => $this->faker->name(),
            'release' => $this->faker->dateTimeThisYear(),
            'country_id' => $this->faker->unique()->numberBetween(1,10),
            'synopsis' => $this->faker->text(),
            'rating' => "9.8",
            'image' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
