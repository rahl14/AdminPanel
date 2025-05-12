<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Empleado</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('employees.update', $employee) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="first_name" class="block font-semibold">Nombre</label>
                            <input type="text" name="first_name" id="first_name"
                                class="w-full border-gray-300 rounded-md"
                                value="{{ old('first_name', $employee->first_name) }}" required>
                            @error('first_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="last_name" class="block font-semibold">Apellido</label>
                            <input type="text" name="last_name" id="last_name"
                                class="w-full border-gray-300 rounded-md"
                                value="{{ old('last_name', $employee->last_name) }}" required>
                            @error('last_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="company_id" class="block font-semibold">Empresa</label>
                            <select name="company_id" id="company_id" class="w-full border-gray-300 rounded-md"
                                required>
                                <option value="">Seleccione una empresa</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}"
                                        {{ old('company_id', $employee->company_id) == $company->id ? 'selected' : '' }}>
                                        {{ $company->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('company_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block font-semibold">Email</label>
                            <input type="email" name="email" id="email"
                                class="w-full border-gray-300 rounded-md" value="{{ old('email', $employee->email) }}">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block font-semibold">Teléfono</label>
                            <input type="text" name="phone" id="phone"
                                class="w-full border-gray-300 rounded-md" value="{{ old('phone', $employee->phone) }}">
                            @error('phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <x-button class="bg-green-500 hover:bg-green-600 text-white">Actualizar Empleado</x-button>
                    </form>

                    <div class="mt-4 flex gap-4">                       
                        <a href="{{ route('employees.index') }}">
                            <x-button class="bg-gray-500 hover:bg-gray-600 text-white">Volver a la lista</x-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
