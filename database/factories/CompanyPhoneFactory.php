<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyPhone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyPhone>
 */
class CompanyPhoneFactory extends Factory
{

    protected $model = CompanyPhone::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country_code' => 7,
            'area_code' => $this->faker->randomNumber('3', true),
            'phone_number' => $this->faker->randomNumber('7', true),
            'company_id' => Company::factory()
        ];
    }

    public function withExistingCompany(Company $company): static
    {
        return $this->state([
            'company_id' => $company->id,
        ]);
    }
}
