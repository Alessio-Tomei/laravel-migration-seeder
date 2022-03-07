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
        for ($i=0; $i < 10; $i++) { 
            $newTravel = new Travel();
            $newTravel->title = $faker->sentence(); 
            $newTravel->place = $faker->sentence(); 
            $newTravel->hotel = $faker->sentence(); 
            $newTravel->date = $faker->date(); 
            $newTravel->price = $faker->randomFloat(2, 100, 100000);
            $newTravel->group_size = $faker->numberBetween(1, 20);
            $newTravel->votes = $faker->numberBetween(1, 10);
            $newTravel->description = $faker->text();
            $newTravel->save();
        }
    }
}
