<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Empleado</h2>
    </x-slot>          

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('employees.store') }}" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="first_name" class="block text-gray-700">Nombre</label>
                            <input type="text" name="first_name" id="first_name" class="w-full border-gray-300 rounded @error('first_name') border-red-500 @enderror" value="{{ old('first_name') }}" required>
                            @error('first_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="last_name" class="block text-gray-700">Apellido</label>
                            <input type="text" name="last_name" id="last_name" class="w-full border-gray-300 rounded @error('last_name') border-red-500 @enderror" value="{{ old('last_name') }}" required>
                            @error('last_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="w-full border-gray-300 rounded @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700">Teléfono</label>
                            <input type="text" name="phone" id="phone" class="w-full border-gray-300 rounded @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">
                            @error('phone')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="company_id" class="block text-gray-700">Empresa</label>
                            <select name="company_id" id="company_id" class="w-full border-gray-300 rounded" required>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <x-button class="bg-blue-500 hover:bg-blue-600 text-white">Crear</x-button>
                    </form>
                     <div class="mt-4 flex gap-4">
                        <a href="{{ route('companies.index') }}">
                            <x-button class="bg-gray-500 hover:bg-gray-600 text-white">Volver a la lista</x-button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>