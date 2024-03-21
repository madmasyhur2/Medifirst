<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'supplier_id',
        'category_id',
        'sku_code',
        'name',
        'unit',
        'variant',
        'group',
        'is_consignment',
        'product_photo_path',
        'location',
        'cost',
        'margin',
        'selling_price',
    ];

    protected $attributes = [
        'supplier_id' => 1,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function sales(): BelongsToMany
    {
        return $this->belongsToMany(Sale::class);
    }

    public function purchases(): BelongsToMany
    {
        return $this->belongsToMany(Purchase::class);
    }

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }

}
