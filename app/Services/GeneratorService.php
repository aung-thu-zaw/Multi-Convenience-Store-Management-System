<?php

namespace App\Services;

use App\Models\Category;

class GeneratorService
{
    public function generateProductSKU(Category $category, array $combination): string
    {
        $attributeValues = implode('-', array_map(function ($value) {
            return $value;
        }, $combination));

        return strtoupper("{$category->slug}-{$attributeValues}-".str()->random(5));
    }
}
