<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
 
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $companies = Company::factory(10)->create();
        $customers = Customer::factory(10)->create();
 
        $items = collect();
        for ($i = 1; $i <= 10; $i++) {
            $items->push(Item::factory()->create([
                'company_id' => $companies->random()->company_id,
            ]));
        }
 
        for ($i = 1; $i <= 10; $i++) {
            Sale::factory()->create([
                'purchase_number' => 'PUR-' . str_pad((string) $i, 6, '0', STR_PAD_LEFT),
                'date_of_purchase' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'customer_id' => $customers->random()->customer_id,
                'item_code' => $items->random()->item_code,
            ]);
        }
        
    }
    
}