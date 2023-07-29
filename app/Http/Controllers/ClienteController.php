<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cliente_Tipo;
use App\Models\Cliente_Clase;


use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $buscar=trim($request->get('buscar'));

        $clientes = Cliente::select('id','nombre','apellido','direccion','telefono','email')
                    ->where('nombre','LIKE','%'.$buscar.'%')
                    ->orWhere('apellido','LIKE','%'.$buscar.'%')
                    ->orderBy('nombre','asc','apellido','asc')
                    ->paginate();

        return view('clientes.index', compact('clientes','buscar'));
    }

    public function create()
    {
        $clientes_tipo = Cliente_Tipo::All();
        $clientes_clase = Cliente_Clase::All();

        return view('clientes.create',compact('clientes_tipo','clientes_clase'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_clase_id'=>['required'],
            //'nombre'=>['required'],
            //'apellido'=>['required'],
            'direccion'=>['required'], 
            'telefono'=>['required','numeric','gt:0','lt:99999999999']/* GreaterThan gt:55 LessThan lt:9999 */, 
            'email'=>['bail','required','email'],
            'cliente_tipo_id'=>['required']
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;

        $cliente->save();

        return redirect()->route('clientes.show', $cliente);
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'cliente_clase_id'=>['required'],
            //'nombre'=>['required'],
            //'apellido'=>['required'],
            'dni'=>['required'],
            'direccion'=>['required'], 
            'telefono'=>['required','numeric','gt:0','lt:9999999999']/* GreaterThan gt:55 LessThan lt:9999 */, 
            'email'=>['bail','required','email'],
            'cliente_tipo_id'=>['required'],
        ]);

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;

        $cliente->save();

        return view('clientes.show', compact('cliente'));
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
