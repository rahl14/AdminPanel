<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Empresa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block">Nombre:</label>
                            <input type="text" name="name" id="name" class="w-full border rounded p-2 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block">Correo electrónico:</label>
                            <input type="email" name="email" id="email" class="w-full border rounded p-2 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="logo" class="block">Logo:</label>
                            <input type="file" name="logo" id="logo" class="w-full border rounded p-2 @error('logo') border-red-500 @enderror" value="{{ old('logo') }}">
                            @error('logo')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="website" class="block">Sitio Web / Página Web:</label>
                            <input type="url" name="website" id="website" class="w-full border rounded p-2 @error('website') border-red-500 @enderror" value="{{ old('website') }}">
                            @error('website')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
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
