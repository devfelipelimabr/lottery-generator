async function generateNumbers() {
    const gameType = document.getElementById('gameType').value;
    const errorDiv = document.getElementById('error');
    const gameNameElement = document.getElementById('gameName');
    const numbersDiv = document.getElementById('numbers');

    try {
        const response = await fetch(`/app.php?game=${gameType}`);
        const data = await response.json();

        if (data.error) {
            throw new Error(data.error);
        }

        gameNameElement.textContent = data.game;
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