<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gerador de Números da Loteria</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Gerador de Números da Loteria</h1>

      <div class="game-select">
        <select id="gameType">
          <option value="megasena">Mega-Sena</option>
          <option value="lotofacil">Lotofácil</option>
        </select>
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
