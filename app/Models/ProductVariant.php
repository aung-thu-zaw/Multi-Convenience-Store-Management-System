<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    /** @use HasFactory<\Database\Factories\ProductVariantFactory> */
    use HasFactory;

    public function attributes()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_variant_attributes');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
