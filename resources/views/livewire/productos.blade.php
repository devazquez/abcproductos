<div class="p-2 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-4 text-2xl">
        Productos ABC!
    </div>


    <div class="mt-3 text-gray-500">
        <div>
            <x-jet-button>
                {{ __('Agregar artículo') }}
            </x-jet-button>
        </div>
       <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2"> 
                        <div class="flex items-center"> Codigo </div>
                    </th>
                    <th class="px-4 py-2"> 
                        <div class="flex items-center"> Nombre </div>
                    </th>
                    <th class="px-4 py-2"> 
                        <div class="flex items-center"> Drescripción Corta </div>
                    </th>
                    <th class="px-4 py-2"> 
                        <div class="flex items-center"> Desripción </div>
                    </th>
                    <th class="px-4 py-2"> 
                        <div class="flex items-center"> Precio </div>
                    </th>
                    <th class="px-4 py-2"> 
                        <div class="flex items-center"> Unidad Medida </div>
                    </th>
                    <th class="px-4 py-2"> 
                        <div class="flex items-center"> Acción </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td class="px-4 py-2 border rounded">
                            {{ $producto->codigo}}
                        </td>
                        <td class="px-4 py-2 border rounded">
                            {{ $producto->nombre}}
                        </td>
                        <td class="px-4 py-2 border rounded">
                            {{ $producto->descripcion_corta}}
                        </td>
                        <td class="px-4 py-2 border rounded">
                            {{ $producto->descripcion}}
                        </td>
                        <td class="px-4 py-2 border rounded">
                            {{ "$ " .number_format($producto->precio, 2)  }}
                        </td>
                        <td class="px-4 py-2 border rounded">
                            {{ $producto->unidad_medida}}
                        </td>
                        <td class="px-4 py-2 border rounded">
                            Editar /
                            <x-jet-danger-button wire:click="confirmProductDeletion({{$producto->id}})" wire:loading.attr="disabled">
                                {{ __(' Eliminar') }}
                            </x-jet-danger-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
       </table>
    </div>
    <div class="mt-4">
        {{$productos->links()}}
    </div>
</div>
