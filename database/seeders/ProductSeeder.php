<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantAttribute;
use App\Models\Store;
use App\Models\Unit;
use App\Services\GeneratorService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variantProductsByCategory = require database_path('data/Products.php');

        $variantProductsByCategory->each(function ($data, $category) {
            $attributesWithValues = $data['attributes'];

            $category = Category::where('name', $category)->first();

            $this->createNecessaryBrandForProducts($data['brands']);

            $this->createAttributesAndValues($attributesWithValues);

            collect($data['products'])->each(function ($productData) use ($category, $attributesWithValues) {
                $unit = null;

                $brand = Brand::where('name', $productData['brand'])->first();

                if (isset($productData['unit'])) {
                    $unit = Unit::firstOrCreate(['name' => $productData['unit']]);
                }

                $store = Store::inRandomOrder()->first();

                $this->createProductWithVariants($store, $category, $brand, $unit, $attributesWithValues, $productData);
            });
        });
    }

    private function createNecessaryBrandForProducts(array $brands): void
    {
        collect($brands)->each(function ($brandName) {
            Brand::firstOrCreate(['name' => $brandName]);
        });
    }

    private function createAttributesAndValues(array $attributes): void
    {
        collect($attributes)->each(function ($attributeValues, $attributeName) {
            $attribute = Attribute::firstOrCreate(['name' => $attributeName]);

            collect($attributeValues)->each(function ($value) use ($attribute) {
                AttributeValue::firstOrCreate([
                    'attribute_id' => $attribute->id,
                    'value' => $value,
                ]);
            });
        });
    }

    private function createProductWithVariants(Store $store, Category $category, ?Brand $brand, ?Unit $unit, array $attributes, array $data): void
    {
        $product = Product::create([
            'store_id' => $store->id,
            'category_id' => $category->id,
            'brand_id' => $brand ? $brand->id : null,
            'unit_id' => $unit ? $unit->id : null,
            'name' => $data['name'],
            'description' => 'This is a high-quality.',
            'status' => 'published',
        ]);

        $this->generateVariants($category, $product, $attributes);
    }

    private function generateVariants(Category $category, Product $product, $attributes)
    {
        $combinations = $this->getCombinations($attributes);

        collect($combinations)->each(function ($combination) use ($category, $product) {
            $sku = (new GeneratorService)->generateProductSKU($category, (array) $combination);

            $variant = ProductVariant::create([
                'product_id' => $product->id,
                'sku' => $sku,
                'cost_price' => rand(100, 500) / 10,
                'price' => rand(500, 1000) / 10,
                'stock_quantity' => rand(10, 100),
            ]);

            collect($combination)->each(function ($attributeValue, $attributeKey) use ($variant) {
                $attribute = Attribute::where('name', $attributeKey)->first();

                $value = AttributeValue::where('attribute_id', $attribute->id)->where('value', $attributeValue)->first();

                ProductVariantAttribute::create([
                    'product_variant_id' => $variant->id,
                    'attribute_value_id' => $value->id,
                ]);
            });
        });
    }

    private function getCombinations(array $attributes): Collection
    {
        $combinations = collect([[]]);

        foreach ($attributes as $attributeName => $values) {
            $combinations = $combinations->flatMap(function ($combination) use ($attributeName, $values) {
                return collect($values)->map(function ($value) use ($combination, $attributeName) {
                    return array_merge($combination, [$attributeName => $value]);
                });
            });
        }

        return $combinations;
    }
}
