<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles de la empresa: {{ $company->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p><strong>Email:</strong> {{ $company->email ?? 'No Email' }}</p>
                    <p><strong>Website:</strong> {{ $company->website ?? 'No Website' }}</p>
                    <img src="{{ $company->logo_url }}" alt="{{ $company->name }}"
                        class="w-24 h-24 object-cover rounded-full mb-4">
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <a href="{{ route('companies.index') }}">
                    <x-button class="bg-gray-500 hover:bg-gray-600 text-white">Volver a la lista</x-button>
                </a>
            </div>
        </div>
</x-app-layout>