<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 100; $i++ ) {

            $newTravel = new Travel();
            $newTravel->code_travel = $faker->ean8();
            $newTravel->destination = $faker->state();
            $newTravel->means_of_transport = $faker->company();
            $newTravel->departure_date = $faker->dateTime();
            $newTravel->returne_date = $faker->dateTime();
            $newTravel->number_passenger = $faker->randomDigit(1,9);
            $newTravel->guide = $faker->text();
            $newTravel->price = $faker->randomFloat(2,1000,100000);
            $newTravel->save();
        }
        // $newTravel = new Travel();
        // $newTravel->code_travel = "abc-125";
        // $newTravel->destination = "italy";
        // $newTravel->means_of_transport = "aereo";
        // $newTravel->departure_date = 21/02;
        // $newTravel->returne_date = 25/02;
        // $newTravel->number_passenger = 2;
        // $newTravel->guide = "locale";
        // $newTravel->price = 1000.00;
        // $newTravel->save();
    }
}
