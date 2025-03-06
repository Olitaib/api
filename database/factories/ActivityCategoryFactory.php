<?php

namespace Database\Factories;

use App\Models\ActivityCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActivityCategory>
 */
class ActivityCategoryFactory extends Factory
{
    protected $model = ActivityCategory::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
        ];
    }
}
