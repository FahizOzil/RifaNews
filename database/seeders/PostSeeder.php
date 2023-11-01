<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $posts = [
            [
                'post_title' => fake()->text('100'),
                'description'=> fake()->text('200'),
                'category' => fake()->numberBetween(1,2),
                'author' => 1,
                'post_img' => 'ozil2.jpg',
            ],
            [
                'post_title' => fake()->text('100'),
                'description'=> fake()->text('200'),
                'category' => fake()->numberBetween(1,2),
                'author' => 1,
                'post_img' => 's6.jpg',
            ],
            [
                'post_title' => fake()->text('100'),
                'description'=> fake()->text('200'),
                'category' => fake()->numberBetween(1,2),
                'author' => 1,
                'post_img' => 's5.jpg',
            ],
            [
                'post_title' => fake()->text('100'),
                'description'=> fake()->text('200'),
                'category' => fake()->numberBetween(1,2),
                'author' => 1,
                'post_img' => 's4.jpg',
            ],
        ];

       

     foreach ($posts as $value) {
        post::create($value);
     }

       
    }
}
