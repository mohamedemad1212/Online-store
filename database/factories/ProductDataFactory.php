<?php

namespace Database\Factories;
use App\Models\ProductData;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PoductData>
 */
class ProductDataFactory extends Factory
{
    protected $model = ProductData::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" =>fake()->company(),
            "price"=>fake()->randomElement([6000,7000,12000,15000,30000,24000,27000]),
            "description"=> fake()->paragraph(),
            "company_id"=> Company::factory() ,
            "img_path"=>fake()->randomElement(["images/images (1).jpeg","images/images (2).jpeg","images/images (3).jpeg","images/images (4).jpeg","images/images (5).webp","images/images (6).jpeg"])
        ];
    }
}
