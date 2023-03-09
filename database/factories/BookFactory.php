<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->colorName,
            "ISBN"=> $this->faker->postcode,
            "pub_year"=> random_int(2010,2022),
            "avaliable"=> random_int(1,50),
            "authorid"=>random_int(1,5)
        ];
    }
}
