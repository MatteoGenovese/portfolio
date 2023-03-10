<?php

use App\Models\BoolBnb\Sponsorship;
use Illuminate\Database\Seeder;

class SponsorshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = [
            [
                'name' => 'Bronze',
                'price' => 2.99,
                'duration' => 1,
            ],
            [
                'name' => 'Silver',
                'price' => 5.99,
                'duration' => 3,
            ],
            [
                'name' => 'Gold',
                'price' => 9.99,
                'duration' => 6,
            ]
        ];

        foreach ($sponsorships as $sponsorship) {
            $newSponsorship = new Sponsorship();
            $newSponsorship->name = $sponsorship['name'];
            $newSponsorship->price = $sponsorship['price'];
            $newSponsorship->duration = $sponsorship['duration'];
            $newSponsorship->save();
        }
    }
}
