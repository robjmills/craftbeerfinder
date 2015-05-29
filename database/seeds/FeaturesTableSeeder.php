<?php

use App\Feature;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder {

    public function run()
    {

        $features = ['Garden', 'Open Fire', 'Growler Fill', 'Take your own food'];

        foreach ($features as $feature) {
            Feature::create([
                'feature' => $feature
            ]);
            $this->command->info('Creating '.$feature);
        }

    }

}