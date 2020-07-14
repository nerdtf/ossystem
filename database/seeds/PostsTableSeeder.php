<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Apple',
                'description' => 'Fine apple',
                'category' => 'products',
                'image' => 'apple.jpg'
            ],
            [
                'title' => 'Php book',
                'description' => 'Nice book',
                'category' => 'books',
                'image' => 'book.jpg'
            ],
            [
                'title' => 'Keyboard',
                'description' => 'Gaming keyboard',
                'category' => 'technics',
                'image' => 'keyboard.jpg'
            ]
        ]);
    }
}
