<?php

use App\Models\BoolBnb\Apartment;
use App\Models\BoolBnb\Visual;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class VisualsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $apartments = Apartment::all();

        for ($i=0; $i < 500; $i++) {
            $newVisual = new Visual();
            $newVisual->apartment_id = $faker->randomElement($apartments)->id;
            $newVisual->date = $faker->dateTimeThisYear();
            $newVisual->user_ip = $faker->unique()->ipv4();
            $newVisual->save();
        }
    }
}
