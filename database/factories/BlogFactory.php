<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Blog::class;
     
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'fecha_publicacion' => $this->faker->date('Y-m-d'),
            'ima_blog' => $this->faker->sentence(),
            'user_id' => $this->faker->randomElement(['1']),
        ];
    }
}
