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
