<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diaria Loto</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    /* === SECCIÓN SUPERIOR === */
    .top {
      background: #aeca36; /* Fondo verde solo aquí */
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 50px 20px; /* baja un poco el bloque */
    }

    /* Imagen */
    .top img {
      width: 150px;
      margin-right: 20px;
    }

    /* Caja de ganador */
    .ganador-box {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .ganador {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #000;
    }

    .nums {
      margin-bottom: 12px;
    }

    .num {
      display: inline-block;
      background: #fff;
      color: #000;
      border-radius: 50%;
      padding: 12px 18px;
      margin: 0 5px;
      font-weight: bold;
      font-size: 20px;
    }

    .proximo {
      display: inline-block;
      background: #ffd400;
      color: #000;
      padding: 8px 18px;
      border-radius: 20px;
      font-weight: bold;
      font-size: 14px;
    }

    /* === BOTONES === */
    .acciones {
      text-align: center;
      margin-top: 40px;
    }

    .acciones button {
      background: #438f4f; /* verde original de botones */
      color: white;
      border: none;
      padding: 12px 20px;
      margin: 10px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .acciones button:hover {
      background: #356c3d;
    }
  </style>
</head>
<body>
  <!-- Sección superior -->
  <div class="top">
    <!-- Imagen -->
    <img src="Diaria.webp" alt="Diaria Loto">

    <!-- Texto -->
    <div class="ganador-box">
      <div class="ganador">ÚLTIMO NÚMERO GANADOR:</div>
      <div class="nums">
        <span class="num">0</span>
        <span class="num">9</span>
        <span class="num">2</span>
      </div>
      <div class="proximo">PRÓXIMO SORTEO EN VIVO: 01/01 - 1:25</div>
    </div>
  </div>

  <!-- Botones -->
  <div class="acciones">
    <button>Botón 1</button>
    <button>Botón 2</button>
  </div>
</body>
</html>
