<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        return view('products.tipo.index', [
            'tipos' => TipoProducto::where('estado', true)->get(),
        ]);
    }

    public function store(Request $request)
    {
        TipoProducto::create([
            'tipo' => $request->tipo,
        ]);
        return back();
    }

    public function edit($id)
    {
        return view('products.tipo.edit', [
            'tipo' => TipoProducto::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        TipoProducto::where('id', $id)->update([
            'tipo' => $request->tipo,
        ]);
        return redirect('/tipos-productos');
    }

    public function destroy($id)
    {
        $tipo = TipoProducto::find($id);
        if ($tipo) {
            $tipo->estado = false;
            $tipo->save();
        }
        return back();
    }
}
