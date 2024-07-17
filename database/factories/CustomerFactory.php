<?php

namespace Database\Factories;

use App\Enums\Customer\CustomerStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
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
            'name' => fake()->name(),
            'mobile' => fake()->numerify('989#########'),
            'status' => fake()->randomElement(CustomerStatusEnum::values()),
            'bank_account_number' => fake()->randomElement([null, fake()->numerify('################')]),
            'complete_info' => fake()->randomElement([true, false]),
            'password' => static::$password ??= Hash::make('password'),
        ];
    }
}
