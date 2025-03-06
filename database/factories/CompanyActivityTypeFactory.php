<?php

namespace Database\Factories;

use App\Models\ActivityType;
use App\Models\Company;
use App\Models\CompanyActivityType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyActivityType>
 */
class CompanyActivityTypeFactory extends Factory
{

    protected $model = CompanyActivityType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'activity_type_id' => ActivityType::factory(),
        ];
    }

    public function withExistingType(ActivityType $type): static
    {
        return $this->state([
            'activity_type_id' => $type->id,
        ]);
    }

    public function withExistingCompany(Company $company): static
    {
        return $this->state([
            'company_id' => $company->id,
        ]);
    }
}
