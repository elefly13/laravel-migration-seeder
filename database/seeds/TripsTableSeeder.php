<?php

use Illuminate\Database\Seeder;
use app\Trip;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $new_trip = new Trip();
            $new_trip->code_trip = 'AS54TY';
            $new_trip->departure_date = '2020-02-13';
            $new_trip->return_date = '2020-03-13';
            $new_trip->locality = 'Torino';
            $new_trip->save();
        }   
    }
}
