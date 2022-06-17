<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';


    public function category()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');

    }

    public function multimedias()
    {
        return $this->belongsToMany(Multimedia::class);
    }

    public function productVentas()
    {
        return $this->belongsToMany(ProductVentas::class);
    }
}
