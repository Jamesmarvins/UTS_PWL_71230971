<?php
 
namespace Database\Factories;
 
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;
 
class CompanyFactory extends Factory
{
    protected $model = Company::class;
 
    public function definition(): array
    {
        return [
            'company_name' => fake()->company(),
            'headquarters_phone_number' => fake()->numerify('+62-21-####-####'),
        ];
    }
}