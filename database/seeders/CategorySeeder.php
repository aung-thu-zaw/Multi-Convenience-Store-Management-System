<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

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
        $category = Category::create([
            'name' => $category['name'],
            'slug' => $category['slug'],
            'parent_id' => $parentId,
        ]);

        if (!empty($category['children'])) {
            foreach ($category['children'] as $child) {
                $this->createCategoryWithChildren($child, $category->id);
            }
        }
    }
}
