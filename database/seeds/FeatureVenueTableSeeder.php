<?php

use App\Venue;
use Illuminate\Database\Seeder;

class FeatureVenueTableSeeder extends Seeder {

    public function run()
    {

        $venues = Venue::all();
        //$features = Feature::all()->toArray();

        foreach ($venues as $venue) {
            $venue->features()->attach([1,2,3]);
            //$this->command->info('Creating '.$venue['name']);
        }
    }

}