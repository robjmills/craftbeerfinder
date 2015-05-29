<?php

use App\Venue;
use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder {

    public function run()
    {
        $venues = [
           [
                'name' => 'Brewdog',
                'description' => 'Crafty dog bar',
                'type_id'   => '1',
                'latitude'  =>  '51.453536',
                'longitude' => '-2.592712',
                'twitter'   => '@BrewDogBristol',
                'address'   => '58 Baldwin Street, Bristol, BS1 1QW'

            ],
            [
                'name' => 'Small Bar',
                'description' => 'Some bollocks',
                'type_id'   => '2',
                'latitude'  =>  '51.451942',
                'longitude' => '-2.594879',
                'twitter'   => '@smallbarbristol',
                'address'   => '31 King Street, Bristol, City of Bristol BS1 4DZ'

            ],
        ];

        foreach ($venues as $venue) {
            Venue::create([
                'name' => $venue['name'],
                'description' => $venue['description'],
                'latitude' => $venue['latitude'],
                'longitude' => $venue['longitude'],
                'twitter' => $venue['twitter'],
                'address' => $venue['address']
            ]);
            $this->command->info('Creating '.$venue['name']);
        }
    }

}