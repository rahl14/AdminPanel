<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Confirmar Eliminación de Empresa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">
                        ¿Estás seguro de que deseas eliminar la empresa <strong>{{ $company->name }}</strong>?
                        Esta acción no se puede deshacer.
                    </p>

                    <div class="flex gap-4">
                        <form action="{{ route('companies.destroy', $company) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="bg-red-500 hover:bg-red-600 text-white">
                                Eliminar
                            </x-button>
                        </form>
                        <a href="{{ route('companies.index') }}">
                            <x-button>
                                Cancelar
                            </x-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>