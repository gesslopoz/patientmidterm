<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name'=>$this->faker->lastName,
            'first_name'=>$this->faker->firstName,
            'address'=>$this->faker->address,
            'disease'=>$this->faker->randomElement(["cancer", "tuberculosis", "pneumonia", "leukemia"]),
        ];
    }
}
