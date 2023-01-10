<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<50; $i++){
            $new_train = new Train();
            $new_train->company_name = $faker->randomElement(['Trenitalia', 'Italo', 'TGV', 'Sangritana']);
            $new_train->departure_station = $faker->randomElement(['Genova_Brignole', 'Roma_Termini', 'Rimini_Centrale', 'Torino_Portanuova', 'Firenze_Santa_Maria_Novella']);
            $new_train->arrival_station = $faker->randomElement(['Bologna_Centrale', 'Pescara_Centrale', 'Verona_Centrale', 'Bari_Centrale', 'Napoli_Centrale']);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->regexify('[A-Z]{2}[0-4]{5}');
            $new_train->couches_number = $faker->numberBetween(5, 12);
            $new_train->is_punctual = $faker->numberBetween(0, 1);
            $new_train->is_suppressed = $faker->numberBetween(0, 1);
            $new_train->save();
        };

       /*  $new_train = new Train();
        $new_train->company_name = 'Trenitalia';
        $new_train->departure_station = 'Bologna';
        $new_train->arrival_station = 'Pescara Centrale';
        $new_train->departure_time = '10:07';
        $new_train->arrival_time = '13:07';
        $new_train->train_code = 'FR 1047';
        $new_train->couches_number = '12';
        $new_train->is_punctual = '1';
        $new_train->is_suppressed = '0';
        $new_train->save(); */
    }
}
