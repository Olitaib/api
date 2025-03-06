<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{

    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company,
            'building_id' => Building::factory(),
        ];
    }

    public function withExistingBuilding(Building $building): static
    {
        return $this->state([
            'building_id' => $building->id,
        ]);
    }
}
