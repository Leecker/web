<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800 overflow-auto">

                    <form action="{{route('productos.index')}}">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" name="buscar" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba aquí el nombre del producto..." value={{ $buscar }}>
                            <button type="submit" class="absolute right-2.5 bottom-2.5 bg-blue-400 hover:bg-blue-500 focus:ring-2 focus:outline-none focus:ring-blue-600 rounded-lg text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-300 dark:focus:ring-blue-300">Buscar</button>
                        </div>
                    </form>

                    <button class="my-3 mx-1 bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-600 rounded-lg text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-300 dark:focus:ring-green-300"><a href="{{ route("productos.create") }}">Nuevo producto</a></button>

                    @if(count($productos)<=0)
                        <div class="font-bold text-center align-middle w-full">
                            <div class="border-y-2 border-y-blue-300"> No se han encontrado productos con la búsqueda "{{ $buscar }}"</div>
                        </div>
                    @else
                        
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-300 text-gray-800 uppercase text-sm leading-normal">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Proveedor</th>
                                    <th>Marca</th>
                                    <th>Stock</th>
                                    <th>Tamaño</th>
                                    <th>Descripción</th>
                                    <th>Último precio compra</th>
                                    <th>Alícuota IVA</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm">

                                @foreach ($productos as $prod)
                                    <tr>
                                        <td>{{ $prod->id }}</td>
                                        <td>{{ $prod->nombre}}</td>
                                        <td>{{ $prod->proveedor->razon_social }}</td>
                                        <td>{{ $prod->marca->nombre}}</td>
                                        <td>{{ $prod->stock }}</td>
                                        <td>{{ $prod->tamano_litros}}</td>
                                        <td>{{ $prod->descripcion}}</td>
                                        <td>{{ $prod->ultimo_precio_compra }}</td>
                                        <td>{{ $prod->alicuota_iva }}</td>
                                        <td>

                                            <div class="flex item-center justify-center">

                                                <!-- VER -->
                                                <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                                    <a href="{{ route('productos.show', $prod) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                </div>

                                                <!-- EDITAR -->
                                                <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                                    <a href="{{ route('productos.edit', $prod) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>
                                                </div>

                                                <!-- ELIMINAR -->
                                                <div class="w-4 mr transform hover:text-red-500 hover:scale-110">
                                                    <svg data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="cursor-pointer" onclick="document.getElementByld('formEliminar').setAttribute('action','{{route('productos.destroy',$prod->id)}}');" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Confirma que desea eliminar el ítem seleccionado?</h3>

                                        <form id="formEliminar" action="#" method="POST">
                                            @csrf
                                            @method('delete')

                                            <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Sí, eliminar
                                            </button>
                                        </form>

                                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            No, cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>





</x-app-layout>
