<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVentas extends Model
{
    protected $table = 'product_ventas';
    
    public function product()
    {
        return $this->hasOne(Producto::class);
    }

    public function Venta()
    {
        return $this->hasOne(Ventas::class);
    }
}
