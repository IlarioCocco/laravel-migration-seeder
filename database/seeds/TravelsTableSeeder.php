<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTravel = new Travel();
        $newTravel->code_travel = "abc-123";
        $newTravel->destination = "italy";
        $newTravel->means_of_transport = "aereo";
        $newTravel->departure_date = 21/02;
        $newTravel->returne_date = 25/02;
        $newTravel->number_passenger = 2;
        $newTravel->guide = "locale";
        $newTravel->price = 1000.00;
        $newTravel->save();
    }
}
