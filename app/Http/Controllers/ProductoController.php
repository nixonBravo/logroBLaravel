<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        return view('products.producto.index', [
            'tipos' => TipoProducto::where('estado', true)->get(),
            'productos' => Producto::where('estado', true)->get(),
        ]);
    }

    public function store(Request $request)
    {
        Producto::create([
            'producto' => $request->producto,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'fechaEntrega' => $request->fechaEntrega,
            'tipo_id' => $request->tipo_id,
        ]);
        return back();
    }

    public function edit(Request $request, $id)
    {
        return view('products.producto.edit', [
            'producto' => Producto::find($id),
            'tipos' => TipoProducto::where('estado', true)->get(),

        ]);

    }

    public function update(Request $request, $id)
    {
        Producto::where('id', $id)->update([
            'producto' => $request->producto,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'fechaEntrega' => $request->fechaEntrega,
            'tipo_id' => $request->tipo_id,
        ]);
        return redirect('/productos');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->estado = false;
            $producto->save();
        }
        return back();
    }
}
