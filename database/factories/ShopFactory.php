<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cityId = City::select('id')->inRandomOrder()->first()->id;
        return [
            'city_id'=>$cityId,
            'name'=>$this->faker->company,
            'location'=>$this->faker->streetAddress(),
        ];
    }
}
