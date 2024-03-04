<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Billing extends Model
{
    use HasFactory;
    use HasRoles;

    //relation dengan role owner 1 to 1
    public function owner()
    {
        return $this->hasOne(User::class, 'billing_id')->where($this->getTable().'.id', 'owner_id'); //cek lagi
    }
    
}
