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
                'city_id'   => '1',
                'type_id'   => '1',
                'latitude'  =>  '51.453536',
                'longitude' => '-2.592712',
                'twitter'   => '@BrewDogBristol',
                'address'   => '58 Baldwin Street, Bristol, BS1 1QW'

            ],
            [
                'name' => 'Small Bar',
                'description' => 'Small bar, Big Beer',
                'city_id'   => '1',
                'type_id'   => '2',
                'latitude'  =>  '51.451942',
                'longitude' => '-2.594879',
                'twitter'   => '@smallbarbristol',
                'address'   => '31 King Street, Bristol, City of Bristol BS1 4DZ'

            ],
            [
                'name' => 'The Hillgrove Porter Stores',
                'description' => 'Dawkins pub etc',
                'city_id'   => '1',
                'type_id'   => '2',
                'latitude'  =>  '51.4630439002269',
                'longitude' => '-2.59280648278449',
                'twitter'   => '@TheHillgrove',
                'address'   => '53 Hillgrove Street North, Bristol, Avon BS2 8LT'

            ],
        ];

        foreach ($venues as $venue) {
            Venue::create([
                'name' => $venue['name'],
                'description' => $venue['description'],
                'latitude' => $venue['latitude'],
                'longitude' => $venue['longitude'],
                'twitter' => $venue['twitter'],
                'address' => $venue['address'],
                'type_id' => $venue['type_id'],
                'city_id' => $venue['city_id']
            ]);
            $this->command->info('Creating '.$venue['name']);
        }
    }

}