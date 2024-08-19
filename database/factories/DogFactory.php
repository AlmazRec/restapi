<?php

namespace Database\Factories;

use App\Models\Dog;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    protected $model = Dog::class;
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'breed' => $this->faker->word(),
            'age' => $this->faker->randomNumber(2, 1 , 100)
        ];
    }
}
