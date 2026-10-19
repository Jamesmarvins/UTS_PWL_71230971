<?php
 
namespace Database\Factories;
 
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;
use App\Models\Item;
 
class ItemFactory extends Factory
{
    protected $model = Item::class;
 
    public function definition(): array
    {
        return [
            'item_code' => fake()->unique()->bothify('ITM-####'),
            'item' => fake()->words(2, true),
            'unit_price' => fake()->randomFloat(2, 10, 5000),
            'company_id' => Company::factory(),
        ];
    }
}