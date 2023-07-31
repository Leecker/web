<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nueva marca
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800">
                    <form action="{{route('marcas.store')}}" method="POST">
                        @csrf
                        <table>
                           <tbody>
                                <tr>
                                    <td><label for="nombre">Nombre: </label></td>
                                    <td> <input type="text" name="nombre" placeholder="Ingresar nombre" value="{{old('nombre')}}"></td>
                                    <td>
                                        @error('nombre')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="descripcion">Descripcion: </label> </td>
                                    <td><input type="text" name="descripcion" placeholder="Ingresar descripcion" value="{{old('descripcion')}}"></td>
                                    <td>    
                                        @error('descripcion')
                                        <small>*{{$message}}</small>
                                        <br>  
                                        @enderror
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="my-3 mx-1 bg-green-400 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-600 rounded-lg text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-300 dark:focus:ring-green-300">Guardar</button>

                        <button class="my-3 mx-1 bg-red-400 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-600 rounded-lg text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-300 dark:focus:ring-red-300"><a href="{{ route('marcas.index') }}">Cancelar</a></button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
