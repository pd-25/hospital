<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 1; $i <= 20; $i++) {
            $data = new JobPost();
            $data->title = $faker->title;
            $data->slug = $faker->unique()->slug(3);
            $data->desc = $faker->text(500);
            $data->location = $faker->address();
            $data->save();
        }
    }
}
