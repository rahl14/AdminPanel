<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Empresa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('companies.update', $company) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block">Name:</label>
                            <input type="text" name="name" id="name" value="{{ $company->name }}" class="w-full border rounded p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block">Email:</label>
                            <input type="email" name="email" id="email" value="{{ $company->email }}" class="w-full border rounded p-2">
                        </div>

                        <div class="mb-4">
                            <label for="logo" class="block">Logo:</label>
                            <input type="file" name="logo" id="logo" class="w-full border rounded p-2">
                            <img src="{{ $company->logo_url }}" alt="{{ $company->name }}" class="w-24 h-24 object-cover rounded-full mt-2">
                        </div>

                        <div class="mb-4">
                            <label for="website" class="block">Website:</label>
                            <input type="url" name="website" id="website" value="{{ $company->website }}" class="w-full border rounded p-2">
                        </div>

                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Actualizar Empresa</button>
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
