<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(
            [
                'name' => 'The Shawshank Redemption',
                'director' => 'Frank Darabont',
                'rating' => '9.2/10',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'image' => '/storage/images/shawshank.jpg',
                'url' => 'https://parsamultimedia.arvanvod.com/e5YRdkq8V7/lg0Wk4qMGX/h_,144_200,240_400,360_800,k.mp4.list/manifest.mpd',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        DB::table('movies')->insert(
            [
                'name' => 'The God Father',
                'director' => 'Francis Ford Coppola',
                'rating' => '9.2/10',
                'description' => 'The aging patriarch of an organized crime dynasty in postwar New York City transfers control of his clandestine empire to his reluctant youngest son.',
                'image' => '/storage/images/godfather.jpg',
                'url' => 'https://parsamultimedia.arvanvod.com/e5YRdkq8V7/ea94mgV2wm/h_,144_200,240_400,360_800,480_1346,k.mp4.list/manifest.mpd',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        DB::table('movies')->insert(
            [
                'name' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'rating' => '9.0/10',
                'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'image' => '/storage/images/darknight.jpg',
                'url' => 'https://parsamultimedia.arvanvod.com/e5YRdkq8V7/ZDv2wa4Y39/h_,144_200,240_400,360_800,480_1469,k.mp4.list/manifest.mpd',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        DB::table('movies')->insert(
            [
                'name' => 'The Godfather Part II',
                'director' => 'Francis Ford Coppola',
                'rating' => '9.0/10',
                'description' => 'The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.',
                'image' => '/storage/images/godfather2.jpg',
                'url' => 'https://parsamultimedia.arvanvod.com/e5YRdkq8V7/W7AZXdZmbG/h_,144_200,240_400,360_800,480_1500,k.mp4.list/manifest.mpd',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        DB::table('movies')->insert(
            [
                'name' => '12 Angry Man',
                'director' => 'Sydney Lumet',
                'rating' => '9.0/10',
                'description' => 'The jury in a New York City murder trial is frustrated by a single member whose skeptical caution forces them to more carefully consider the evidence before jumping to a hasty verdict.',
                'image' => '/storage/images/12angryman.jpg',
                'url' => 'https://parsamultimedia.arvanvod.com/e5YRdkq8V7/49yVJvVjXo/h_,144_200,240_400,360_800,480_1500,k.mp4.list/master.m3u8',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        DB::table('movies')->insert(
            [
                'name' => 'Schindler\'s List',
                'director' => 'Steven steilberg',
                'rating' => '9.0/10',
                'description' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'image' => '/storage/images/schindler.jpg',
                'url' => 'https://parsamultimedia.arvanvod.com/e5YRdkq8V7/yAxElwQrvq/h_,144_200,240_400,360_800,480_1458,k.mp4.list/master.m3u8',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
