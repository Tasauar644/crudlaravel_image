<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakeData = Faker::create();
        for($i = 0; $i<10; $i++)
        {
            Post::create([
                "title" => $fakeData->title,
                "details" => $fakeData->paragraph,
                "user_id" => User::inRandomOrder()->first()->id
            ]);
        }
        //
    }
}
