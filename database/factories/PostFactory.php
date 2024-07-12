<?php

// database/factories/PostFactory.php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        
             return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
        
    }
}