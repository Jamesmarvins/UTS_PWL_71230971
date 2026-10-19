<?php
 
namespace Database\Factories;
 
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
 
class SaleFactory extends Factory
{
    protected $model = Sale::class;
 
    public function definition(): array
    {
        return [
            'purchase_number' => fake()->unique()->bothify('PUR-######'),
            'date_of_purchase' => fake()->date(),
            'customer_id' => Customer::factory(),
            'item_code' => Item::factory(),
        ];
    }
}