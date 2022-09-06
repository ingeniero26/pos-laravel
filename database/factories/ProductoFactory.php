<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "codigo" =>$this->faker->numberBetween(1000,9000),
            "nombre" =>$this->faker->name,
            "descripcion" =>$this->faker->text,
            "precio" =>$this->faker->randomNumber(2),
            "url_imagen" =>$this->faker->imageUrl(200,100),
            "like" =>rand(0,10),
            "dislike" =>rand(0,10)
          
        ];
    }
}
