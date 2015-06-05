<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder {

    public function run()
    {
        $posts = [
           [
                'title' => 'Some news',
                'content' => 'Loads of content',
                'user_id'   => '1',
                'venue_id'   => '1',

            ],
            [
                'title' => 'Some other news',
                'content' => 'Loads more content',
                'user_id'   => '1',
                'venue_id'   => '1',

            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'content' => $post['content'],
                'user_id' => $post['user_id'],
                'venue_id' => $post['venue_id'],
            ]);
            $this->command->info('Creating '.$post['title']);
        }
    }

}