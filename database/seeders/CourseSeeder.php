<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Membuat 10 data course
        foreach (range(1, 10) as $index) {
            Course::create([
                'name' => $faker->word, // Menghasilkan nama course acak
                'description' => $faker->paragraph, // Menghasilkan deskripsi acak
                'duration' => $faker->numberBetween(1, 6), // Menghasilkan durasi acak (misalnya dalam bulan)
            ]);
        }
    }
}
