<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Empresas</h2>
    </x-slot>          

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">                    
                    <a href="{{ route('companies.create') }}">
                        <x-button class="bg-blue-500 hover:bg-blue-600 text-white mb-4">Crear Empresa</x-button>
                    </a>

                    <x-table>
                        <x-slot name="thead">
                            <tr class="border-b-2 border-gray-200">
                                <th class="py-3 px-4 text-start text-sm font-semibold tracking-wider text-gray-700 uppercase">#</th>                                  
                                <th class="py-3 px-4 text-start text-sm font-semibold tracking-wider text-gray-700 uppercase">Logo</th>                                 
                                <th class="py-3 px-4 text-start text-sm font-semibold tracking-wider text-gray-700 uppercase">Nombre</th>                                    
                                <th class="py-3 px-4 text-start text-sm font-semibold tracking-wider text-gray-700 uppercase">Email</th>
                                <th class="py-3 px-4 text-start text-sm font-semibold tracking-wider text-gray-700 uppercase">Website</th>
                                <th class="py-3 px-4 text-start text-sm font-semibold tracking-wider text-gray-700 uppercase">Acciones</th>
                            </tr>
                        </x-slot>
                        
                        <x-slot name="tbody">
                            @foreach ($companies as $index => $company)
                                <tr class="hover:bg-blue-100">
                                    <td class="py-3 px-4">{{ $companies->firstItem() + $loop->index }}</td>
                                    <td class="py-3 px-4">
                                        <img src="{{ $company->logo_url }}" alt="{{ $company->name }}"
                                            class="w-16 h-16 object-cover rounded-md">
                                    </td>
                                    <td class="py-3 px-4">{{ $company->name }}</td>
                                    <td class="py-3 px-4">{{ $company->email ?? 'No Email' }}</td>
                                    <td class="py-3 px-4">{{ $company->website ?? '---' }}</td>
                                    <td class="py-3 px-4">
                                        <div class="flex gap-2">
                                            <a href="{{ route('companies.show', $company) }}">
                                                <x-button class="bg-blue-500 hover:bg-blue-600 text-white">Ver</x-button>
                                            </a>       
                                            <a href="{{ route('companies.edit', $company) }}">
                                                <x-button class="bg-green-500 hover:bg-green-600 text-white">Editar</x-button>
                                            </a>                                               
                                            <a href="#" onclick="confirmDelete('{{ route('companies.destroy', $company) }}')">
                                                <x-button class="bg-red-500 hover:bg-red-600 text-white">Eliminar</x-button>
                                            </a>                                                                                                                             
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </x-slot>

                        <x-slot name="footer">                            
                            {{ $companies->links() }}                            
                        </x-slot>
                    </x-table>                    
                </div>
            </div>
        </div>
    </div>   

    <div id="deleteModal" class="fixed inset-0 z-50 hidden bg-gray-500 bg-opacity-75 flex justify-center items-center">
        <div class="bg-white p-6 rounded shadow-lg w-96">
            <h3 class="text-lg font-semibold">¿Estás seguro de eliminar esta empresa?</h3>
            <p>Esta acción no se puede deshacer.</p>
            <div class="mt-4 flex justify-end gap-4">
                <button id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded">Cancelar</button>
                <form id="deleteForm" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(url) {            
            document.getElementById('deleteModal').classList.remove('hidden');           
            document.getElementById('deleteForm').action = url;
        }
        
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('deleteModal').classList.add('hidden');
        });
    </script>
        
</x-app-layout>

