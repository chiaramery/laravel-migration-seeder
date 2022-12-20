<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $table->string('company', 100);
        // $table->string('departure_station', 50);
        // $table->dateTimeTz('departure_time');
        // $table->string('arrival_station', 50);
        // $table->dateTimeTz('arrival_time');
        // $table->tinyInteger('code_train');
        // $table->smallInteger('n_carriages');
        // $table->tinyInteger('is_in_time')->unsigned()->default(1);
        // $table->tinyInteger('deleted')->unsigned()->default(0);

        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company =  $faker->word(1);
            $newTrain->departure_station =  $faker->city();
            $newTrain->departure_time =  $faker->date('2022_12_d');
            $newTrain->arrival_station =  $faker->city();
            $newTrain->arrival_time =  $faker->date('2022_12_d');
            $newTrain->code_train =  $faker->randomNumber(5, true);
            $newTrain->n_carriages =  $faker->numberBetween(1, 12);
            $newTrain->save();
        }
        dd($newTrain);
    }
}
