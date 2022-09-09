<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                "agency" => 'trenitalia',
                "departure_station" => 'roma',
                "arrival_station" => 'bari',
                "departure_time" => '2022-02-02 13:30:20',
                "arrival_time" => '2022-02-02 16:39:50',
                "train_code" => '345234jksjs',
                "number_of_carriages" => 4,
                "is_on_time" => true,
                "is_cancelled" => false,
            ],
            [
                "agency" => 'frecciarossa',
                "departure_station" => 'bari',
                "arrival_station" => 'milano',
                "departure_time" => '2022-03-02 12:30:00',
                "arrival_time" => '2022-03-03 15:00:00',
                "train_code" => '34523sdsdksjs',
                "number_of_carriages" => 6,
                "is_on_time" => false,
                "is_cancelled" => false,
            ],
            [
                "agency" => 'gianni treni',
                "departure_station" => 'palermo',
                "arrival_station" => 'enna',
                "departure_time" => '2022-02-05 05:00:00',
                "arrival_time" => '2022-02-05 09:30:00',
                "train_code" => '345s34jksjs',
                "number_of_carriages" => 3,
                "is_on_time" => false,
                "is_cancelled" => true,
            ],
            [
                "agency" => 'trenitalia',
                "departure_station" => 'roma',
                "arrival_station" => 'bari',
                "departure_time" => '2022-02-02 13:30:20',
                "arrival_time" => '2022-02-02 16:39:50',
                "train_code" => '345234jksjs',
                "number_of_carriages" => 4,
                "is_on_time" => true,
                "is_cancelled" => false,
            ],
            [
                "agency" => 'trenitalia',
                "departure_station" => 'napoli',
                "arrival_station" => 'bari',
                "departure_time" => '2022-09-09 13:30:20',
                "arrival_time" => '2022-09-09 16:39:50',
                "train_code" => '345234jfsjs',
                "number_of_carriages" => 8,
                "is_on_time" => true,
                "is_cancelled" => false,
            ],           
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->is_on_time = $train['is_on_time'];
            $newTrain->is_cancelled = $train['is_cancelled'];
            $newTrain->save();
        }
    }
}
