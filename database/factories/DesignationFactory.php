<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Designation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DesignationFactory extends Factory
{
    protected $model = Designation::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word.' designation',
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
