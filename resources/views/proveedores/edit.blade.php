<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar proveedor
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800">
                    {{-- preguntar sobre que ruta va aquí, POR QUÉ VA proveedores.update en lugar de proveedores.edit --}}
                    <form action="{{route('proveedores.update', $proveedor)}}" method="POST">
                        @csrf
                        @method('put') <!--Aquí indicamos que vamos a usar el método "put"-->
                        <table>
                           <tbody>
                             <tr>
                                 <td><label for="cuit">CUIT: </label></td>
                                 <td>
                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                        <input type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            name="cuit" placeholder="Ingrese el cuit"
                                            value="{{ old('cuit', $proveedor->cuit) }}">
                                    </div>
                                </td>
                                 <td>
                                     @error('cuit')
                                     <small>*{{$message}}</small>
                                     <br>  
                                     @enderror
                                 </td>
                             </tr>

                             <tr>
                                 <td><label for="razon_social">Razon Social: </label> </td>
                                 <td>
                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                        <input type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            name="razon_social" placeholder="Ingrese la razón social"
                                            value="{{ old('razon_social', $proveedor->razon_social) }}">
                                    </div>
                                </td>
                                 <td>    
                                     @error('razon_social')
                                     <small>*{{$message}}</small>
                                     <br>  
                                     @enderror
                                 </td>
                             </tr>
                             <tr>
                                 <td><label for="contacto_nombre">Nombre: </label></td>
                                 <td>
                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                        <input type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            name="contacto_nombre" placeholder="Ingrese un nombre"
                                            value="{{ old('contacto_nombre', $proveedor->contacto_nombre) }}">
                                    </div>
                                </td>
                                 <td>
                                     @error('contacto_nombre')
                                     <small>*{{$message}}</small>
                                     <br>  
                                     @enderror
                                 </td>
                             </tr>
                             <tr>
                                 <td><label for="contacto_telefono">Teléfono: </label></td>
                                 <td>
                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                        <input type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            name="contacto_telefono" placeholder="Ingrese un nombre"
                                            value="{{ old('contacto_telefono', $proveedor->contacto_telefono) }}">
                                    </div>
                                </td>
                                 <td>    
                                     @error('contacto_telefono')
                                     <small>*{{$message}}</small>
                                     <br>  
                                     @enderror
                                 </td>
                             </tr>
                             <tr>
                                 <td><label for="direccion">Direccion: </label></td>
                                 <td>
                                    <div class="relative mb-3" data-te-input-wrapper-init>
                                        <input type="text"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            name="direccion" placeholder="Ingrese un nombre"
                                            value="{{ old('direccion', $proveedor->direccion) }}">
                                    </div>
                                </td>
                                 <td>    
                                     @error('direccion')
                                     <small>*{{$message}}</small>
                                     <br>  
                                     @enderror
                                 </td>
                             </tr>
                            </tbody>
                        </table>
                        <button class="my-3 mx-1 bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-600 rounded-lg text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-300 dark:focus:ring-green-300" type="submit">Actualizar</button>
                        <a class="my-3 mx-1 bg-red-400 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-600 rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-300 dark:focus:ring-red-300" href="{{ route('proveedores.index') }}">Cancelar</a>

                        {{-- <button class="my-3 mx-1 bg-red-400 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-600 rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-300 dark:focus:ring-red-300"><a href="{{ route('proveedores.index') }}">Cancelar</a></button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
