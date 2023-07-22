<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Información del producto "{{$producto->nombre}}"
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800">
                    <table>
                        <tbody>
                             <tr>
                                 <td><label for="nombre">Nombre: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="nombre" value="{{ $producto->nombre }}"></td>
                             </tr>

                             <tr>
                                 <td><label for="marca">Marca: </label> </td>
                                 <td><input class="bg-gray-200" disabled type="text" name="marca"value="{{ $producto->marca->nombre }}"></td>
                             </tr>

                             <tr>
                                 <td><label for="proveedor">Proveedor: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="proveedor" value="{{ $producto->proveedor->razon_social }}"></td>
                             </tr>

                             <tr>
                                 <td><label for="tamano_litros">Tamaño: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="tamano_litros" value="{{ $producto->tamano_litros }}"></td>
                                 <td><label for="tamano_litros">kg/lts</label></td>
                            </tr>

                             <tr>
                                 <td><label for="stock">Stock: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="stock" value="{{ $producto->stock }}"></td>
                                 <td><label for="stock">unidades</label></td>
                            </tr>

                             <tr>
                                <td><label for="ultimo_precio_compra">Precio Última Compra: </label></td>
                                <td><input class="bg-gray-200" disabled type="text" name="ultimo_precio_compra" value="{{ $producto->ultimo_precio_compra }}"></td>
                            </tr>

                            <tr>
                                <td><label for="alicuota_iva">Alícuota IVA: </label></td>
                                <td><input class="bg-gray-200" disabled type="text" name="alicuota_iva" value="{{ $producto->alicuota_iva }}"></td>
                            </tr>

                            <tr>
                                <td><label for="descripcion">Descripción: </label></td>
                                <td><input class="bg-gray-200" disabled type="text" name="descripcion" value="{{ $producto->descripcion }}"></td>
                            </tr>

                         </tbody>
                     </table>
                    <br>&nbsp;

                    <button class="my-3 mx-1 bg-blue-400 hover:bg-blue-500 focus:ring-2 focus:outline-none focus:ring-blue-600 rounded-lg text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-300 dark:focus:ring-blue-300"><a href="{{ route("productos.index") }}">Volver</a></button>
                    <button class="my-3 mx-1 bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-600 rounded-lg text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-300 dark:focus:ring-green-300"><a href="{{ route('productos.edit', $producto) }}">Editar</a></button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
