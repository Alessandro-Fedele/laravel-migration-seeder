<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $travel = new Travel();
            $travel->city = $faker->city();
            $travel->image_path = $faker->imageUrl(540, 480, 'Travels', true, true);
            $travel->gate = $faker->randomDigit;
            $travel->departure = $faker->dateTimeBetween('+0 week', '+1 week');
            $travel->arrival = $faker->dateTimeBetween('+1 week', '+4 week');
            $travel->price = $faker->numberBetween(500, 4500);
            $travel->save();
        }
    }
}
