<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\Designation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'department_id' => Department::inRandomOrder()->first()->id,
            'designation_id' => Designation::inRandomOrder()->first()->id,
            'name' => fake()->name(),
            'phone_number' => $this->faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),            
        ];
    }
}
