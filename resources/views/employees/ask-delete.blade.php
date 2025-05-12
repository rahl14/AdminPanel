<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Eliminar Empleado</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">¿Estás seguro de eliminar este empleado?</h3>
                    <p>{{ $employee->first_name }} {{ $employee->last_name }}</p>

                    <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')
                        <x-button class="bg-red-500 hover:bg-red-600 text-white">Eliminar</x-button>
                        <a href="{{ route('employees.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
