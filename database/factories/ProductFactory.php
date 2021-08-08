<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
            'sku' => $this->faker->unique()->sentence(1),
            'name' => $this->faker->sentence(1),
            'description' => $this->faker->paragraph(1),
            'value' => $this->faker->randomNumber(),
            'image' => $this->faker->image(
                    rtrim(Storage::disk('images')->getAdapter()->getPathPrefix(), '\\')
                ),
            'id_store' => $this->faker->numberBetween(1, \App\Models\Store::all()->count()),
        ];
    }
}
