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
    <script>
        function generateCards(num) {
    let cards = '';
    for (let i = 0; i < num; i++) {
      cards += `
        <div class="bg-white border rounded-lg p-4 mt-6 ml-3 mr-3">
          <img src="https://i.imgur.com/qb3q2Sp.png" alt="Boat" class="w-full object-cover h-16 sm:h-48 md:h-16 lg:h-48" />
          <h3 class="mt-4 text-xl font-semibold">Сыкс с лодкой</h3>
          <p class="text-gray-600">Ахуеть сыкс с лодкой</p>
          <p class="mt-3 font-bold text-lg">1400000 ₽</p>
        </div>
      `;
    }
    return cards;
  }

  document.getElementById('generatedCards').innerHTML = generateCards(40);
    </script>
</x-app-layout>
