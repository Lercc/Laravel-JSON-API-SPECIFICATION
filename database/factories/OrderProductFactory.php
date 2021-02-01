<?php

namespace Database\Factories;

use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => rand(1,10),
            'product_id' => rand(1,15),
            'cantidad' => $this->faker->randomDigitNotNull,
            'precio_total' => $this->faker->randomFloat(2,1,9999)
        ];
    }
}
