<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $countryId = Country::select('id')->inRandomOrder()->first()->id;
        return [
            'country_id'=>$countryId,
            'name'=>$this->faker->unique()->city
        ];
    }
}
