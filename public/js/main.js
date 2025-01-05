const gameLimits = {
    megasena: { min: 6, max: 15, name: 'Mega-Sena' },
    lotofacil: { min: 15, max: 20, name: 'Lotofácil' }
};

function updateQuantityLimits() {
    const gameType = document.getElementById('gameType').value;
    const quantityInput = document.getElementById('quantity');
    const quantityLimits = document.getElementById('quantityLimits');
    const limits = gameLimits[gameType];

    quantityInput.min = limits.min;
    quantityInput.max = limits.max;
    quantityInput.value = limits.min;

    quantityLimits.textContent =
        `(${limits.name}: ${limits.min} a ${limits.max} números)`;
}

async function generateNumbers() {
    const gameType = document.getElementById('gameType').value;
    const quantity = document.getElementById('quantity').value;
    const errorDiv = document.getElementById('error');
    const gameNameElement = document.getElementById('gameName');
    const numbersDiv = document.getElementById('numbers');

    try {
        const response = await fetch(`/app.php?game=${gameType}&quantity=${quantity}`);
        const data = await response.json();

        if (data.error) {
            throw new Error(data.error);
        }

        gameNameElement.textContent = `${data.game} - ${data.quantity} números`;
        numbersDiv.innerHTML = data.numbers
            .map(number => `<div class="number">${number}</div>`)
            .join('');
        errorDiv.textContent = '';
    } catch (error) {
        errorDiv.textContent = `Erro: ${error.message}`;
        gameNameElement.textContent = '';
        numbersDiv.innerHTML = '';
    }
}

// Inicializar os limites
updateQuantityLimits();