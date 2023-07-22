<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Información del proveedor "{{$proveedor->contacto_nombre}}"
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800">
                    <table>
                        <tbody>
                            <tr>
                                <td><label for="id">ID: </label></td>
                                <td><input class="bg-gray-200" disabled type="text" name="id" value="{{ $proveedor->id }}"></td>
                            </tr>

                             <tr>
                                 <td><label for="cuit">CUIT: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="cuit" value="{{ $proveedor->cuit }}"></td>
                             </tr>

                             <tr>
                                 <td><label for="razon_social">Razon Social: </label> </td>
                                 <td><input class="bg-gray-200" disabled type="text" name="razon_social"value="{{ $proveedor->razon_social }}"></td>
                             </tr>

                             <tr>
                                 <td><label for="nombre">Nombre: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="nombre" value="{{ $proveedor->contacto_nombre }}"></td>
                             </tr>

                             <tr>
                                 <td><label for="telefono">Teléfono: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="telefono" value="{{ $proveedor->contacto_telefono }}"></td>                            
                            </tr>

                             <tr>
                                 <td><label for="direccion">Dirección: </label></td>
                                 <td><input class="bg-gray-200" disabled type="text" name="direccion" value="{{ $proveedor->direccion }}"></td>
                            </tr>
                     </table>
                    <br>&nbsp;

                    <button class="my-3 mx-1 bg-blue-400 hover:bg-blue-500 focus:ring-2 focus:outline-none focus:ring-blue-600 rounded-lg text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-300 dark:focus:ring-blue-300"><a href="{{ route("proveedores.index") }}">Volver</a></button>
                    <button class="my-3 mx-1 bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-600 rounded-lg text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-300 dark:focus:ring-green-300"><a href="{{ route('proveedores.edit', $proveedor) }}">Editar</a></button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
