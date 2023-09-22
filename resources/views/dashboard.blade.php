<x-app-layout>
    <x-slot name="header">
        <div class="mt-5">
            <input type="text" class="form-input rounded-md shadow-sm block w-full" placeholder="Поиск...">
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div id="generatedCards" class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-8"></div>
            </div>
        </div>
    </div>
    @vite(['resources/js/generate_cards.js'])
</x-app-layout>
