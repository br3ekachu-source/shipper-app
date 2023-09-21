function generateCards(num) {
    let cards = '';
    for (let i = 0; i < num; i++) {
      cards += `
        <div class="bg-white border rounded-lg p-4">
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