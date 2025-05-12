<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles del empleado: {{ $employee->first_name }} {{ $employee->last_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <strong class="text-lg">Nombre:</strong>
                        <p>{{ $employee->first_name }} {{ $employee->last_name }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="text-lg">Empresa:</strong>
                        <p>{{ $employee->company->name }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="text-lg">Correo electrónico:</strong>
                        <p>{{ $employee->email ?? 'No disponible' }}</p>
                    </div>

                    <div class="mb-4">
                        <strong class="text-lg">Teléfono:</strong>
                        <p>{{ $employee->phone ?? 'No disponible' }}</p>
                    </div>

                    <div class="mt-4 flex gap-4">
                        <a href="{{ route('employees.edit', $employee) }}">
                            <x-button class="bg-green-500 hover:bg-green-600 text-white">Editar</x-button>
                        </a>

                        <a href="{{ route('employees.index') }}">
                            <x-button class="bg-gray-500 hover:bg-gray-600 text-white">Volver a la lista</x-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
