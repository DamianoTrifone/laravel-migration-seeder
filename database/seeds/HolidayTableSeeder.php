<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayHoliday = config('holiday');

        foreach ($arrayHoliday as $item){
            $holiday = new Holiday();

            $holiday->destinazione = $item["destinazione"];
            $holiday->dataPartenza = $item["dataPartenza"];
            $holiday->dataRitorno = $item["dataRitorno"];
            $holiday->ospiti = $item["ospiti"];
            $holiday->prezzo = $item["prezzo"];
            $holiday->save();

        }
    }
}
