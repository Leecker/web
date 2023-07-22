<?php

namespace App\Http\Controllers;

use Carbon;
use App\Models\Marca;
use App\Models\Proveedor;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar=trim($request->get('buscar'));

        $productos = Producto::select('id','proveedor_id','marca_id',
                    'nombre','descripcion','stock','tamano_litros','ultimo_precio_compra','alicuota_iva',
                    'ultima_fecha_actualizacion_precio')
                        ->where('nombre','LIKE','%'.$buscar.'%')
                        ->orWhere('descripcion','LIKE','%'.$buscar.'%')
                        ->orWhereHas(
                            'Proveedor',
                            function (Builder $query) use ($buscar) {
                                $query->where('razon_social', 'like', '%'.$buscar.'%');
                            })
                        ->orWhereHas(
                            'Marca',
                            function (Builder $query) use ($buscar) {
                                $query->where('nombre', 'like', '%'.$buscar.'%');
                            })
                        ->orderBy('nombre','asc','descripcion','asc')
                        ->paginate();

        return view('productos.index', compact('productos','buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::All();
        $proveedores = Proveedor::All();

        return view('productos.create', compact('marcas', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombre'=>['required'],
            'marca_id'=>['required'],
            'proveedor_id'=>['required'],
            'tamano'=>['bail','required','numeric','gt:0','lt:9999'], /* GreaterThan gt:55 LessThan lt:9999 */
            'stock'=>['bail','required','numeric','gte:0','lte:999999'], /* GreaterThan gt:55 LessThan lt:9999 */
            'ultimo_precio_compra'=>['bail','required','numeric','gte:0','lte:999999'], /* GreaterThan gt:55 LessThan lt:9999 */
            'alicuota_iva'=>['bail','required','numeric','in:10.5,21.0'], /* GreaterThan gt:55 LessThan lt:9999 */
            'descripcion'=>['required']
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->marca_id = $request->marca_id;
        $producto->proveedor_id = $request->proveedor_id;
        $producto->tamano_litros = $request->tamano;
        $producto->stock = $request->stock;
        $producto->ultimo_precio_compra = $request->ultimo_precio_compra;
        $mytime = Carbon\Carbon::now();
        $producto->ultima_fecha_actualizacion_precio = $mytime->toDateTimeString();
        $producto->alicuota_iva = $request->alicuota_iva;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect()->route('productos.show', $producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    // 
    public function show(Producto $producto)
    {
        // existe un objeto de tipo Producto llamado $producto
        // que contiene toda la información del registro de la tabla cuyo id es el del parámetro
        // dump($producto);

        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $marcas = Marca::All();
        $proveedores = Proveedor::All();

        return view('productos.edit', compact('producto', 'marcas', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre'=>['required'],
            'marca_id'=>['required'],
            'proveedor_id'=>['required'],
            'tamano'=>['bail','required','numeric','gt:0','lt:9999'], /* GreaterThan gt:55 LessThan lt:9999 */
            'stock'=>['bail','required','numeric','gte:0','lte:999999'], /* GreaterThan gt:55 LessThan lt:9999 */
            'ultimo_precio_compra'=>['bail','required','numeric','gte:0','lte:999999'], /* GreaterThan gt:55 LessThan lt:9999 */
            'alicuota_iva'=>['bail','required','numeric','in:10.5,21.0'], /* GreaterThan gt:55 LessThan lt:9999 */
            'descripcion'=>['required']
        ]);

        $producto->nombre = $request->nombre;
        $producto->marca_id = $request->marca_id;
        $producto->proveedor_id = $request->proveedor_id;
        $producto->tamano_litros = $request->tamano;
        $producto->stock = $request->stock;
        $producto->ultimo_precio_compra = $request->ultimo_precio_compra;
        
        $mytime = Carbon\Carbon::now();
        $producto->ultima_fecha_actualizacion_precio = $mytime->toDateTimeString();
        $producto->alicuota_iva = $request->alicuota_iva;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return view('productos.show', compact('producto'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */

     
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
