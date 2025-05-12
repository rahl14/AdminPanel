<div class="overflow-x-auto rounded-md bg-white shadow-md">
    <table class="min-w-full">
        <thead class="bg-gray-100 border-b-2 border-gray-200">
            {{ $thead }}
        </thead>
        <tbody class="divide-y divide-gray-100">
            {{ $tbody }}
        </tbody>
    </table>
    
    @if (isset($footer))
        <div class="mt-4 pt-4">
            {{ $footer }}
        </div>
    @endif
</div>