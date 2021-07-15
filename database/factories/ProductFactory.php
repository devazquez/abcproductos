<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'nombre' => $this->faker->word(),
            'precio' => $this->faker->randomNumber(2),
            'descripcion' => $this->faker->word(),
            'descripcion_corta' => $this->faker->word(),
            'codigo' => $this->faker->word(),
            'unidad_medida' => $this->faker->word(),
        ];
    }
}
