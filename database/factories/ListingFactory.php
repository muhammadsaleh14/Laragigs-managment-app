<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Schema::create('listings', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('tags');
        //     $table->string('company');
        //     $table->string('location');
        //     $table->string('email');
        //     $table->string('website');
        //     $table->longText('description');
        //     $table->timestamps();
        return [
            'title' => fake()->sentence(),
            'tags' => 'laravel,api,backend',
            'company' => fake()->company(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'location' => fake()->city(),
            'description'=> fake()->paragraph(5)
        ];
    }
}