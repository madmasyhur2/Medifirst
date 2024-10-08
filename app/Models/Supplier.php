<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
