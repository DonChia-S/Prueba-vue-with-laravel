<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function productVentas()
    {
        return $this->belongsToMany(ProductVentas::class);
    }
}
