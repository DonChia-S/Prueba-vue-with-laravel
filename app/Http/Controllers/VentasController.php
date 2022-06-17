<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Venta;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\ProductVentas;

class VentasController extends Controller
{
    public function sellByUser($id_user){
        $ventas = ProductVentas::join('productos', 'productos.id', '=', 'producto_id')
                                ->join('ventas', 'ventas.id', '=', 'venta_id')
                                ->join('users', 'users.id', '=', 'ventas.user_id')
                                ->get(['users.id as user_id',
                                    'productos.id as producto_id',
                                    'productos.price',
                                    'product_ventas.amount',
                                    'ventas.id as venta_id']);

        $result = array();
        foreach($ventas as $venta){
            $p = Producto::find($venta->producto_id);
            array_push($result,[
                'amount' => $venta->amount,
                "total" => $venta->amount * $venta->price,
                'user' => User::find($venta->user_id),
                'producto' => [
                    'name' => $p->name,
                    'category' => Categoria::find($p->categoria_id)
                ],
                'ventas' => Venta::find($venta->venta_id),
            ]);
        }

        return response()->json($result);
    }
}
