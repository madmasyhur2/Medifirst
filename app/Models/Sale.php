<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sale extends Model
{
    use HasFactory;

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    //relation dengan role cashier 1 to many
    
    //relation dengan owner untuk melakukan transfer stock
}
