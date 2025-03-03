<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
        "name" => "string",
        "type" => "mixed",
        "email" => "string",
        "address" => "string",
        "city" => "string",
        "state" => "",
        "postal_code" => "string"
    ])]
    public function definition(): array
    {
        $type = $this->faker->randomElement(["I","B"]);
        $name = $type == 'I' ? $this->faker->name(): $this->faker->company();
        return [
           "name" => $name,
            "type" => $type,
            "email" =>$this->faker->email(),
            "address" =>$this->faker->streetAddress(),
            "city"=>$this->faker->city(),
            "state"=>$this->faker->state(),
            "postal_code"=>$this->faker->postcode()

        ];
    }
}
