<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = require database_path('data/Categories.php');

        $categories->each(fn ($category) => $this->createCategoryWithChildren($category));
    }

    private function createCategoryWithChildren(array $category, ?int $parentId = null): void
    {
        $parentCategory = Category::create([
            'name' => $category['name'],
            'parent_id' => $parentId,
        ]);

        if (! empty($category['children'])) {
            foreach ($category['children'] as $child) {
                $this->createCategoryWithChildren($child, $parentCategory->id);
            }
        }
    }
}
