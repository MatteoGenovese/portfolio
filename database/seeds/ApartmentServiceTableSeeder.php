<?php

use App\Models\BoolBnb\Apartment;
use App\Models\BoolBnb\Service;
use Illuminate\Database\Seeder;

class ApartmentServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::all();
        $services = Service::all();

        foreach ($apartments as $apartment) {

            $randomServices = Service::inRandomOrder()->limit(4)->get();

            foreach ($randomServices as $service) {

                $apartment->services()->attach($service->id);

            }

        }
    }
}
