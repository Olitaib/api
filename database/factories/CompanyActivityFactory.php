<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Company;
use App\Models\CompanyActivity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyActivity>
 */
class CompanyActivityFactory extends Factory
{

    protected $model = CompanyActivity::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'activity_id' => Activity::factory(),
        ];
    }

    public function withExistingCompany(Company $company): static
    {
        return $this->state([
            'company_id' => $company->id,
        ]);
    }

    public function withExistingActivity(Activity $activity): static
    {
        return $this->state([
            'activity_id' => $activity->id,
        ]);
    }
}
