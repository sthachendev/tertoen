<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donation;
use Faker\Factory as Faker;


class DonationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Create 40 fake donations
        for ($i = 0; $i < 40; $i++) {
            Donation::create([
                'name' => $faker->name,
                'cid' => $faker->randomNumber(6),
                'phone' => $faker->phoneNumber,
                'nationality' => $faker->randomElement(['Bhutanese', 'Foreigner']),
                'dzongkhag' => $faker->city,
                'gewog' => $faker->streetName,
                'village' => $faker->streetAddress,
                'donation_type' => $faker->word,
                'payment_platform' => $faker->word,
                'paid_to_bank' => $faker->word,
                'journal_no' => $faker->randomNumber(3),
                'amount' => $faker->numberBetween(100, 1000),
                'remarks' => $faker->sentence
            ]);
        }
    }
}
