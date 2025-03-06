<?php

namespace Database\Factories;

use App\Models\ActivityCategory;
use App\Models\Company;
use App\Models\CompanyActivityCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyActivityCategory>
 */
class CompanyActivityCategoryFactory extends Factory
{

    protected $model = CompanyActivityCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'activity_category_id' => ActivityCategory::factory(),
        ];
    }

    public function withExistingCompany(Company $company): static
    {
        return $this->state([
            'company_id' => $company->id,
        ]);
    }

    public function withExistingCategory(ActivityCategory $category): static
    {
        return $this->state([
            'activity_category_id' => $category->id,
        ]);
    }
}
