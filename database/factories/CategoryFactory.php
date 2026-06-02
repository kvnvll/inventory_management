<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Beverages',
                'Snacks',
                'Dairy',
                'Frozen Foods',
                'Personal Care',
                'Household Items',
                'Canned Goods',
                'Bakery',
                'Instant Noodles',
                'School Supplies'
            ]),
        ];
    }
}