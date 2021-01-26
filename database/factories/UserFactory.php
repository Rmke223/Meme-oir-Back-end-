<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

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
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'bio' => $this->faker->text,
            'email_verified_at' => Carbon::now(),
            'password' => $this->faker->password, // password
            'last_logged_in' => Carbon::now(),
        ];
    }
}
