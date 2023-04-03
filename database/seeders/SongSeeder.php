<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Song;
class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 20; $i++) { 
        
        $new_song = new Song;
        
        $new_song->title = $faker->sentence(1);
        $new_song->album = $faker->sentence(2);
        $new_song->author = $faker->name($gender = null);
        $new_song->editor = $faker->name($gender = null);
        $new_song->lenght = $faker->randomFloat(2, 2, 7);
        $new_song->poster = "https://picsum.photos/200/200?random";

        $new_song->save();
      }
    }
}