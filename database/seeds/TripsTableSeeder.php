<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $new_trip = new Trip();
            $new_trip->code_trip = $faker->bothify('??-##-???');
            $new_trip->departure_date = $faker->date();
            $new_trip->return_date = $faker->date();
            $new_trip->locality = $faker->city();
            $new_trip->price = $faker->randomFloat(2, 2000, 10000);
            $new_trip->save();
        }   
    }
}
