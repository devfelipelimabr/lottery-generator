<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Números da Loteria</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1>Gerador de Números da Loteria</h1>

    <div class="game-select">
      <div class="input-group">
        <label for="gameType">Jogo:</label>
        <select id="gameType" onchange="updateQuantityLimits()">
          <option value="megasena">Mega-Sena</option>
          <option value="lotofacil">Lotofácil</option>
        </select>
      </div>

      <div class="input-group">
        <label for="quantity">Quantidade de números:</label>
        <input type="number" id="quantity" min="6" max="15" value="6">
        <span id="quantityLimits" class="help-text">
          (Mega-Sena: 6 a 15 números)
        </span>
      </div>

      <button onclick="generateNumbers()">Gerar Números</button>
    </div>

    <div id="result">
      <h2 id="gameName"></h2>
      <div id="numbers" class="numbers"></div>
    </div>

    <div id="error" class="error"></div>
  </div>

  <script src="js/main.js"></script>
</body>

</html>