<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Números da Loteria</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container my-4">
    <h1 class="text-center">Gerador de Números da Loteria</h1>

    <div class="game-select my-4">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="gameType" class="form-label">Jogo:</label>
          <select id="gameType" class="form-select" onchange="updateQuantityLimits()">
            <option value="megasena">Mega-Sena</option>
            <option value="lotofacil">Lotofácil</option>
          </select>
        </div>
      </div>

      <div class="row mb-3 align-items-center">
        <div class="col-md-6 d-flex">
          <button class="btn btn-outline-secondary" onclick="decreaseQuantity()">
            <i class="fas fa-minus"></i>
          </button>
          <input type="number" id="quantity" class="form-control text-center mx-2" min="6" max="15" value="6" readonly>
          <button class="btn btn-outline-secondary" onclick="increaseQuantity()">
            <i class="fas fa-plus"></i>
          </button>
        </div>
        <small id="quantityLimits" class="form-text text-muted mt-2">
          (Mega-Sena: 6 a 15 números)
        </small>
      </div>

      <div class="row">
        <div class="col-md-6">
          <button class="btn btn-success w-100" onclick="generateNumbers()">Gerar Números</button>
        </div>
      </div>
    </div>

    <div id="result" class="text-center mt-4">
      <h2 id="gameName"></h2>
      <div id="numbers" class="numbers d-flex flex-wrap justify-content-center"></div>
    </div>

    <div id="error" class="error text-danger text-center mt-3"></div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/fontawesome.all.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    function increaseQuantity() {
      const quantityInput = document.getElementById('quantity');
      const max = parseInt(quantityInput.max, 10);
      let value = parseInt(quantityInput.value, 10);
      if (value < max) {
        quantityInput.value = value + 1;
      }
    }

    function decreaseQuantity() {
      const quantityInput = document.getElementById('quantity');
      const min = parseInt(quantityInput.min, 10);
      let value = parseInt(quantityInput.value, 10);
      if (value > min) {
        quantityInput.value = value - 1;
      }
    }
  </script>
</body>

</html>