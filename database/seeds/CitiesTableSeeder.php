<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder {

    public function run()
    {
        $cities = ['Bristol'];

        foreach ($cities as $city) {
            City::create([
                'name' => $city
            ]);
            $this->command->info('Creating '.$city);
        }
    }

}