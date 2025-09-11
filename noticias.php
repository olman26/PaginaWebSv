<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 20px;
      text-align: center;
    }

    /* Contenedor general */
    .res-cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    /* Tarjeta individual */
    .res-card {
      background: #ffffff;
      border-radius: 15px;
      padding: 20px;
      width: 280px;
      min-height: 220px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    /* Variantes de colores en bordes */
    .res-card.verde {
      border-top: 8px solid #28a745; /* verde */
    }
    .res-card.rojo {
      border-top: 8px solid #dc3545; /* rojo */
    }

    /* Imagen dentro de la tarjeta */
    .res-card img {
      width: 80px;
      margin: 0 auto 10px;
      display: block;
    }

    /* Esferas de números */
    .numeros {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-top: 15px;
    }

    .numeros span {
      width: 55px;
      height: 55px;
      background: radial-gradient(circle at 30% 30%, #ffffff, #007bff);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      font-weight: bold;
      color: #ffffff;
      box-shadow: inset -2px -2px 6px rgba(0, 0, 0, 0.3),
                  inset 2px 2px 6px rgba(255, 255, 255, 0.4),
                  0 4px 6px rgba(0, 0, 0, 0.2);
    }

    /* Texto de la tarjeta */
    .res-card h3 {
      font-size: 18px;
      font-weight: bold;
      margin-top: 10px;
      color: #333333;
    }

    .res-card p {
      font-size: 14px;
      color: #555555;
    }
  </style>
</head>
<body>

  <h1>Resultados de los sorteos</h1>

  <div class="res-cards">
    <!-- Tarjeta verde -->
    <div class="res-card verde">
      <img src="Diaria.webp" alt="Diaria">
      <h3>Diaria</h3>
      <div class="numeros">
        <span>3</span>
        <span>8</span>
      </div>
      <p>Resultado más reciente</p>
    </div>

    <!-- Tarjeta roja -->
    <div class="res-card rojo">
      <img src="SuperPremio.webp" alt="Súper Premio">
      <h3>Súper Premio</h3>
      <div class="numeros">
        <span>12</span>
        <span>24</span>
        <span>36</span>
        <span>48</span>
        <span>52</span>
        <span>60</span>
      </div>
      <p>Último sorteo</p>
    </div>
  </div>

</body>
</html>
