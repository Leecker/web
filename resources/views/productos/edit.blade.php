<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800">
                    {{-- preguntar sobre que ruta va aquí, POR QUÉ VA productos.update en lugar de productos.edit --}}
                    <form action="{{route('productos.update', $producto)}}" method="POST">
                        @csrf
                        @method('put') <!--Aquí indicamos que vamos a usar el método "put"-->
                        <table>
                           <tbody>
                                <tr>
                                    <td><label for="nombre">Nombre: </label></td>
                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="nombre" placeholder="Ingrese un nombre"
                                                value="{{ old('nombre', $producto->nombre) }}">
                                        </div>
                                    </td>
                                    <td>
                                        @error('nombre')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="marca_id">Marca: </label> </td>
                                    <td>
                                        <select data-te-select-init name="marca_id">
                                            <option value="">-- Seleccione una Marca --</option>
                                            @foreach ($marcas as $marca)
                                                <option value="{{$marca['id']}}"
                                                @if (old('marca_id', $producto->marca_id)==$marca['id']) selected @endif
                                                >{{$marca['nombre']}}</option>                           
                                            @endforeach
                                        </select>                                   
                                    </td>
                                    <td>    
                                        @error('marca_id')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="proveedor_id">Proveedor: </label> </td>
                                    <td>
                                        <select data-te-select-init name="proveedor_id">
                                            <option value="">-- Seleccione un Proveedor --</option>
                                            @foreach ($proveedores as $proveedor)
                                                <option value="{{$proveedor['id']}}" 
                                                @if (old('proveedor_id', $producto->proveedor_id)==$proveedor['id']) selected @endif
                                                > 
                                                {{$proveedor['razon_social']}}
                                            </option>                           
                                            @endforeach
                                        </select>                                   
                                    </td>
                                    <td>    
                                        @error('proveedor_id')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="tamano">Tamaño: </label></td>

                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="tamano" placeholder="Ingrese un tamaño"
                                                value="{{ old('tamano', $producto->tamano_litros) }}">
                                        </div>
                                    </td>
                                    <td>kg/lts</td>
                                    <td>
                                        @error('tamano')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="stock">Stock: </label></td>

                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="stock" placeholder="Ingrese el stock disponible"
                                                value="{{ old('stock', $producto->stock) }}">
                                        </div>
                                    </td>
                                    <td>unidades</td>
                                    <td>
                                        @error('stock')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="ultimo_precio_compra">Último Precio de Compra:</label></td>

                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="ultimo_precio_compra" placeholder="Ingrese el último precio de compra"
                                                value="{{ old('ultimo_precio_compra', $producto->ultimo_precio_compra) }}">
                                        </div>
                                    </td>
                                    <td>$</td>
                                    <td>
                                        @error('ultimo_precio_compra')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="alicuota_iva">Alícuota IVA: </label> </td>

                                    <td>
                                        <select data-te-select-init name="alicuota_iva">
                                            <option value="">-- Seleccione una opción --</option>
                                                <option value="10.5" 
                                                @if (old('alicuota_iva', $producto->alicuota_iva)==10.5) selected @endif>
                                                10.5 %
                                                </option>
                                                <option value="21.0" 
                                                @if (old('alicuota_iva', $producto->alicuota_iva)==21) selected @endif> 
                                                21.0 %
                                                </option>
                                        </select>
                                    </td>
                                    <td>    
                                        @error('alicuota_iva')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="descripcion">Descripción: </label></td>
                                    <td>
                                        <div class="relative mb-3" data-te-input-wrapper-init>
                                            <input type="text"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                name="descripcion" placeholder="Ingrese una descripción"
                                                value="{{ old('descripcion', $producto->descripcion) }}">
                                        </div>
                                    </td>
                                    <td>    
                                        @error('descripcion') 
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <button class="my-3 mx-1 bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-600 rounded-lg text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-300 dark:focus:ring-green-300" type="submit">Actualizar</button>
                        <button class="my-3 mx-1 bg-red-400 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-600 rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-300 dark:focus:ring-red-300"><a href="{{ route('productos.index') }}">Cancelar</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
