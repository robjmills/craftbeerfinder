<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder {

    public function run()
    {
        $types = ['Bar','Pub','Music Venue','Deli','Off-License','Restaurant','Brewery','Other'];

        foreach ($types as $type) {
            Type::create([
                'type' => $type
            ]);
            $this->command->info('Creating '.$type);
        }
    }

}