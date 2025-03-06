<?php

namespace Database\Factories;

use App\Models\ActivityCategory;
use App\Models\ActivityType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActivityType>
 */
class ActivityTypeFactory extends Factory
{

    protected $model = ActivityType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'activity_category_id' => ActivityCategory::factory(),
        ];
    }

    public function withExistingCategory(ActivityCategory $category): static
    {
        return $this->state([
            'activity_category_id' => $category->id,
        ]);
    }
}
