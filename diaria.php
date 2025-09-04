
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diaria Loto</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #fff;
      color: #333;
    }

    /* Encabezado */
    header {
      background: #a5cd39;
      padding: 20px;
      text-align: center;
      color: white;
    }

    header h1 {
      margin: 0;
      font-size: 28px;
    }

    .ganador {
      font-size: 20px;
      margin: 10px 0;
    }

    .numeros {
      display: inline-block;
      background: #fff;
      color: #333;
      border-radius: 50%;
      padding: 10px 15px;
      margin: 0 5px;
      font-weight: bold;
    }

    .proximo {
      background: #ffd400;
      color: #000;
      padding: 8px 12px;
      border-radius: 6px;
      display: inline-block;
      margin-top: 10px;
      font-size: 14px;
    }

    /* Botones principales */
    nav {
      display: flex;
      justify-content: center;
      gap: 10px;
      background: #a5cd39;
      padding: 10px;
      flex-wrap: wrap;
    }

    nav a {
      background: #fff;
      color: #333;
      padding: 8px 15px;
      border-radius: 5px;
      font-size: 14px;
      text-decoration: none;
      font-weight: bold;
    }

    /* Resultados anteriores */
    .resultados {
      text-align: center;
      padding: 20px;
    }

    .resultados button {
      background: #00a651;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
    }

    .calendario {
      margin-top: 15px;
      display: inline-block;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    /* Cómo jugar */
    .seccion {
      background: #f6f6f6;
      padding: 20px;
      margin: 20px;
      border-radius: 10px;
    }

    .seccion h2 {
      text-align: center;
      margin-bottom: 15px;
    }

    .seccion p {
      margin-bottom: 10px;
      line-height: 1.5;
    }

    /* Botones de ayuda */
    .acciones {
      text-align: center;
      margin: 20px 0;
    }

    .acciones button {
      display: block;
      margin: 10px auto;
      background: #a5cd39;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 14px;
    }

    .acciones button:hover {
      background: #8bb32e;
    }

    /* Botón reglamento */
    .reglamento {
      text-align: center;
      margin: 30px 0;
    }

    .reglamento button {
      background: #ff6f00;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <header>
    <h1>DIARIA Loto</h1>
    <div class="ganador">Último número ganador:</div>
    <div>
      <span class="numeros">0</span>
      <span class="numeros">9</span>
      <span class="numeros">2</span>
    </div>
    <div class="proximo">Próximo sorteo en vivo: 01/01 - 1:25</div>
  </header>

  <nav>
    <a href="#">Cómo jugar Diaria</a>
    <a href="#">Descargá Guía de Sueños</a>
    <a href="#">Resultados Números Diaria</a>
  </nav>

  <section class="resultados">
    <h2>Resultados Anteriores</h2>
    <button>Seleccioná la fecha</button>
    <div class="calendario">
      <p>[Aquí iría el calendario]</p>
    </div>
  </section>

  <section class="seccion">
    <h2>Cómo Jugar y Ganar</h2>
    <p>Vende nuestros puntos de venta autorizados. Escoge 3 números del 0 al 9 y juega.</p>
    <p><b>¿Cómo se juega?</b><br>
      • Escoge 3 dígitos del 0 al 9.<br>
      • Compra tu boleto en un punto autorizado.<br>
      • Espera el sorteo en vivo y revisa si ganaste.
    </p>
  </section>

  <div class="acciones">
    <button>Jugá en sorteos consecutivos</button>
    <button>Conocé los resultados</button>
    <button>Reclamá tu premio</button>
  </div>

  <div class="reglamento">
    <button>LEER EL REGLAMENTO</button>
  </div>

</body>
</html>



