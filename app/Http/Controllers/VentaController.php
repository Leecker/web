<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(Request $request)
    {
          $buscar=trim($request->get('buscar'));

         $ventas = Venta::select('id','fecha','numero_factura','tipo_factura','id_cliente','estado')
                     ->where('fecha','LIKE','%'.$buscar.'%')
                     ->orWhere('estado','LIKE','%'.$buscar.'%')
                     ->orderBy('id','asc','descripcion','asc')
                     ->paginate();

         return view('ventas.index', compact('ventas','buscar'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Venta $venta)
    {
        //
    }

    public function edit(Venta $venta)
    {
        //
    }

    public function update(Request $request, Venta $venta)
    {
        //
    }

    public function destroy(Venta $venta)
    {
        //
    }
}
