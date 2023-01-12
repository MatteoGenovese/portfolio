<?php

use App\Models\BoolBnb\Apartment;
use App\Models\BoolBnb\Sponsorship;
use Illuminate\Database\Seeder;

class ApartmentSponsorshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO To seed when needed

        $apartments = Apartment::inRandomOrder()->limit(2)->get();
        $selectedSponsorship = Sponsorship::find(3);

        foreach ($apartments as $apartment) {

            $expirationDate = now()->addDays($selectedSponsorship->duration);

            $apartment->sponsorships()->attach($selectedSponsorship, ['expiration_date' => $expirationDate ]);

        }
    }
}
