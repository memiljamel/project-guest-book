<?php

namespace Database\Factories;

use App\Enums\GenderEnum;
use App\Models\Department;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'staff_number' => fake()->unique()->numerify('STF-####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(GenderEnum::class),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'job_title' => fake()->jobTitle(),
            'department_id' => Department::factory(),
        ];
    }
}
