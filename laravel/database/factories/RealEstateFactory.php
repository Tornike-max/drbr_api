<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\City;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RealEstate>
 */
class RealEstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //  $table->text('address');
    //         $table->text('image');
    //         $table->foreignIdFor(Region::class);
    //         $table->longText('description');
    //         $table->foreignIdFor(City::class);
    //         $table->text('zip_code');
    //         $table->integer('price');
    //         $table->integer('area');
    //         $table->integer('bedrooms');
    //         $table->boolean('is_rental');
    public function definition(): array
    {
        $region = Region::inRandomOrder()->first();

        $city = City::where('region_id', $region->id)->inRandomOrder()->first();
        return [
            'address' => fake()->address(),
            'image' => fake()->imageUrl(),
            'region_id' => $region->id,
            'description' => fake()->realText(),
            'city_id' => $city ? $city->id : null,
            'zip_code' => $this->faker->postcode,
            'price' => fake()->numberBetween(50000, 500000),
            'area' => fake()->numberBetween(50000, 500000),
            'bedrooms' => fake()->numberBetween(1, 6),
            'is_rental' => fake()->boolean(),
            'agent_id' => Agent::inRandomOrder()->first()->id,
        ];
    }
}
