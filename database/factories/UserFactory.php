<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Username' => $this->faker->username,
            'Firstname' => $this->faker->firstName,
            'Lastname' => $this->faker->lastName,
            'MiddleName' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'Telephone' => '09890890',
            'Gender' =>$this->faker->titleFemale ,
            'Birthday' =>$this->faker->date($format = 'Y-m-d', $max = 'now') ,
            'Status' =>1,
            'Age' =>rand(0,9),

        ];
    }
}
