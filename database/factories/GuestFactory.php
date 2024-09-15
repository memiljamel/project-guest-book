<?php

namespace Database\Factories;

use App\Enums\GenderEnum;
use App\Models\Guest;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Guest::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => fake()->randomElement(GenderEnum::class),
            'email' => fake()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'company' => fake()->company(),
            'address' => fake()->address(),
            'purpose' => fake()->sentence(),
            'staff_id' => Staff::factory(),
        ];
    }
}
