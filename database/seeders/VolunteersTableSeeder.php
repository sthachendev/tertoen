<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Volunteer;
use Faker\Factory as Faker;

class VolunteersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 40 dummy data entries
        for ($i = 0; $i < 40; $i++) {
            Volunteer::create([
                'fullName' => $faker->name,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'cid' => $faker->unique()->randomNumber(6),
                'dob' => $faker->date,
                'village' => $faker->city,
                'geog' => $faker->state,
                'dzongkhag' => $faker->state,
                'nationality' => $faker->country,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'mailingAddress' => $faker->address,
                'areasOfInterest' => json_encode($faker->randomElements([
                    'socialActivities',
                    'religiousActivities',
                    'projectDevelopment',
                    'technicalSupport',
                    'fieldSurvey',
                    'internationalFunding',
                    'socialSupport',
                    'fundraising',
                    'webDevelopment',
                    'constructionMaterials',
                    'hardwareMaterials',
                    'monetaryContributions',
                    'physicalContributions',
                ], $faker->numberBetween(1, 5))),
            ]);
        }
    }
}
