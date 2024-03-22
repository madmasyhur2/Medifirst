<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'batch_code',
        'stock',
        'expired_at',
        
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
