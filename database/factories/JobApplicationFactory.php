<?php

namespace Database\Factories;

use App\Models\JobPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobApplication>
 */
class JobApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_post_id' => JobPost::all()->random()->id, 
            'first_name' => $this->faker->title, 
            'last_name' => $this->faker->title, 
            'form_Phone' => $this->faker->phoneNumber,
            'form_Email' => $this->faker->safeEmail(), 
            'form_message' => $this->faker->text, 
            'fileToUpload' => $this->faker->title, 
            'slug' => $this->faker->slug()
        ];
    }
}
