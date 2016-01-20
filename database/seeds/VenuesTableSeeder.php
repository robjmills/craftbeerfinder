<?php

use App\Venue;
use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder {

    public function run()
    {

        $faker = Faker\Factory::create();

        $venues = [
           [
                'name' => 'Brewdog',
                'city_id'   => '1',
                'type_id'   => '1',
                'latitude'  =>  '51.453536',
                'longitude' => '-2.592712',
                'twitter'   => '@BrewDogBristol',
                'address'   => '58 Baldwin Street, Bristol, BS1 1QW'

            ],
            [
                'name' => 'Small Bar',
                'city_id'   => '1',
                'type_id'   => '2',
                'latitude'  =>  '51.451942',
                'longitude' => '-2.594879',
                'twitter'   => '@smallbarbristol',
                'address'   => '31 King Street, Bristol, City of Bristol BS1 4DZ'

            ],
            [
                'name' => 'The Hillgrove Porter Stores',
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
                'description' => $faker->paragraph(),
                'latitude' => $venue['latitude'],
                'longitude' => $venue['longitude'],
                'twitter' => $venue['twitter'],
                'address' => $venue['address'],
                'type_id' => $venue['type_id'],
                'city_id' => $venue['city_id'],
                'image-small' => $faker->imageUrl(100,100,'nightlife'),
                'image-large' => $faker->imageUrl(400,200,'nightlife'),

            ]);
            $this->command->info('Creating '.$venue['name']);
        }
    }

}