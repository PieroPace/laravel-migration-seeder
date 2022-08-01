<?php

use Faker\Generator as Faker;
use App\Trains;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Trains();
            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_time = $faker->time('H:i');
            $newTrain->arrival_time = $faker->time('H:i');
            $newTrain->train_code = $faker->regexify('[A-Z]{2}[0-9]{4}');
            $newTrain->train_carriage = $faker->randomDigit();
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
