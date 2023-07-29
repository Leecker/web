<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuevo cliente
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800">

                    <form action="{{route('clientes.store')}}" method="POST">
                        @csrf
                        <table>
                           <tbody>
                            <tr>
                                <td>
                                    <label for="cliente_clase">Cliente clase: </label> </td>
                                        <td>
                                            <select data-te-select-init name="cliente_clase_id" id="select_cliente_clase" >
                                                <option value=""> Seleccione un tipo de cliente </option>
                                                @foreach ($clientes_clase as $cliente_clase)
                                                    <option value="{{ $cliente_clase['id'] }}"
                                                        @if (old('cliente_clase_id') == $cliente_clase['id']) selected @endif>
                                                        {{ $cliente_clase['nombre'] }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            @error('cliente_clase_id')
                                                <small>*{{ $message }}</small>
                                                <br>
                                            @enderror
                                    </td>
                            </tr>
                           <tr>
                            <td>&nbsp;</td>
                            <td coslpan="2">

                                <div id="persona_fisica">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><label for="nombre">Nombre: </label></td>
                                                <td>
                                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                                        <input type="text"
                                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                            name="nombre" placeholder="Ingrese un nombre"
                                                            value="{{ old('nombre') }}">
                                                    </div>
                                                </td>
                                                {{-- <td><input type="text" name="nombre" placeholder="Ingresar nombre" value="{{old('nombre')}}"></td> --}}
                                                <td>
                                                    @error('nombre')
                                                    <small>*{{$message}}</small>
                                                    <br>  
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><label for="apellido">Apellido: </label> </td>
                                                <td>
                                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                                        <input type="text"
                                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                            name="apellido" placeholder="Ingrese un apellido"
                                                            value="{{ old('apellido') }}">
                                                    </div>
                                                </td>
                                                <td>    
                                                    @error('apellido')
                                                    <small>*{{$message}}</small>
                                                    <br>  
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="dni">DNI: </label></td>
                                                <td>
                                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                                        <input type="text"
                                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                            name="dni" placeholder="Ingrese su dni"
                                                            value="{{ old('dni') }}">
                                                    </div>
                                                </td>
                                                <td>    
                                                    @error('dni')
                                                    <small>*{{$message}}</small>
                                                    <br>  
                                                    @enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="persona_juridica">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><label for="razon_social">Razón Social: </label></td>
                                                <td>
                                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                                        <input type="text"
                                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                            name="razon_social" placeholder="Ingrese una Razón Social"
                                                            value="{{ old('razon_social') }}">
                                                    </div>
                                                </td>
                                                {{-- <td><input type="text" name="nombre" placeholder="Ingresar nombre" value="{{old('nombre')}}"></td> --}}
                                                <td>
                                                    @error('razon_social')
                                                    <small>*{{$message}}</small>
                                                    <br>  
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><label for="cuit">CUIT: </label></td>
                                                <td>
                                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                                        <input type="text"
                                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                            name="dni" placeholder="Ingrese un CUIT"
                                                            value="{{ old('cuit') }}">
                                                    </div>
                                                </td>
                                                <td>    
                                                    @error('cuit')
                                                    <small>*{{$message}}</small>
                                                    <br>  
                                                    @enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </td>
                            </tr>
                                <tr>
                                    <td><label for="direccion">Dirección: </label></td>
                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="direccion" placeholder="Ingrese una dirección"
                                                value="{{ old('direccion') }}">
                                        </div>
                                    </td>
                                    {{-- <td><input type="text" name="direccion" placeholder="Ingresar dirección" value="{{old('direccion')}}"></td> --}}
                                    <td>
                                        @error('direccion')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="telefono">Teléfono: </label></td>
                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="telefono" placeholder="Ingrese un teléfono"
                                                value="{{ old('telefono') }}">
                                        </div>
                                    </td>
                                    <td>sin puntos, guiones y/o espacios</td>
                                    {{-- <td><input type="text" name="telefono" placeholder="Ingresar telefono" value="{{old('telefono')}}"></td> --}}
                                    <td>    
                                        @error('telefono')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="email">Email: </label></td>
                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="email" placeholder="Ingrese un e-mail"
                                                value="{{ old('email') }}">
                                        </div>
                                    </td>
                                    {{-- <td><input type="text" name="email" placeholder="Ingresar email" value="{{old('email')}}"></td> --}}
                                    <td>
                                        @error('email')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="cliente_tipo">Cliente tipo: </label> </td>
                                            <td>
                                                <select data-te-select-init name="cliente_tipo_id">
                                                    <option value=""> Seleccione un tipo de cliente </option>
                                                    @foreach ($clientes_tipo as $cliente_tipo)
                                                        <option value="{{ $cliente_tipo['id'] }}"
                                                            @if (old('cliente_tipo_id') == $cliente_tipo['id']) selected @endif>
                                                            {{ $cliente_tipo['nombre'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                @error('cliente_tipo_id')
                                                    <small>*{{ $message }}</small>
                                                    <br>
                                                @enderror
                                        </td>
                                       
                                </tr>
                            </tbody>
                        </table>
                        
                        <button type="submit" class="my-3 mx-1 bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-600 rounded-lg text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-300 dark:focus:ring-green-300">Guardar</button>
                        <button class="my-3 mx-1 bg-red-400 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-600 rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-300 dark:focus:ring-red-300"><a href="{{ route('clientes.index') }}">Cancelar</a></button>


                        
                        

                        
                        {{-- <button type="submit">Guardar</button> --}}
                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
function actualizarClienteClase() {
    if ($("#select_cliente_clase").val()==1) {
        $('#persona_fisica').show();
        $('#persona_juridica').hide();

    } else if ($("#select_cliente_clase").val()==2) {
        $('#persona_fisica').hide();
        $('#persona_juridica').show();
    } else {
        $('#persona_fisica').hide();
        $('#persona_juridica').hide();
    }
}

// Load de la página
$(document).ready(function() {
    actualizarClienteClase();
});

// Evento change del objeto #select_cliente_clase
$('#select_cliente_clase').change(function() {
    actualizarClienteClase();
});
</script>

