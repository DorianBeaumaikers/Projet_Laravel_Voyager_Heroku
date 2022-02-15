<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->text(),
            'created_at' => $this->faker->dateTime(),
            'image' => "works/".$this->faker->numberBetween(1,8).".jpg",
            'inSlider' => $this->faker->numberBetween(0,1),
        ];
    }
}
