<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function findProducts($id){
        $products = Categoria::find($id)->productos;
        $categoria = Producto::find($id)->category;
        $result = array();
        foreach ($products as $product){
            array_push($result, [
                "name" => $product->name,
                "description" => $product->description,
                "price" => $product->price,
                "stock" => $product->stock,
                "category" => Categoria::find($product->categoria_id)
                // Categoria::find($product->categoria_id)
            ]);
        };
        return response()->json($result);
    }
}
