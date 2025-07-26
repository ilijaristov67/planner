<?php

namespace Modules\Admin\Database\Factories\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\User\User;

class UserFactory extends Factory
{
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'username' => $this->faker->unique()->userName.$this->faker->randomNumber(4),
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
