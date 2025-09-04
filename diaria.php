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

    .top {
      background: #a5cd39;
      text-align: center;
      padding: 20px 10px;
      color: #fff;
    }

    .top h1 {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .ganador {
      font-size: 18px;
      margin-bottom: 8px;
    }

    .nums {
      margin: 10px 0;
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
      padding: 6px 15px;
      border-radius: 6px;
      font-weight: bold;
      margin-top: 10px;
      font-size: 14px;
    }

    .menu {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      background: #a5cd39;
      padding: 12px;
    }

    .menu a {
      background: #fff;
      color: #000;
      text-decoration: none;
      padding: 8px 15px;
      border-radius: 5px;
      font-weight: bold;
      font-size: 14px;
    }

    .resultados {
      text-align: center;
      padding: 25px 15px;
    }

    .resultados h2 {
      font-size: 20px;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .resultados button {
      background: #00a651;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .calendario {
      margin: 20px auto 0;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      max-width: 250px;
      background: #fafafa;
    }

    .seccion {
      background: #f6f6f6;
      padding: 20px;
      margin: 20px;
      border-radius: 10px;
      text-align: center;
    }

    .seccion h2 {
      font-size: 22px;
      margin-bottom: 15px;
    }

    .seccion p {
      margin-bottom: 12px;
      line-height: 1.5;
      font-size: 14px;
    }

    .acciones {
      text-align: center;
      margin: 20px 0;
    }

    .acciones button {
      display: block;
      margin: 12px auto;
      background: #a5cd39;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      font-size: 14px;
    }

    .acciones button:hover {
      background: #8bb32e;
    }

    .reglamento {
      text-align: center;
      margin: 30px 0;
    }

    .reglamento button {
      background: #ff6f00;
      color: white;
      border: none;
      padding: 14px 30px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<html>
  <div class="top">
    <h1>DIARIA Loto</h1>
    <div class="ganador">ÚLTIMO NÚMERO GANADOR:</div>
    <div class="nums">
      <span class="num">0</span>
      <span class="num">9</span>
      <span class="num">2</span>
    </div>
    <div class="proximo">PRÓXIMO SORTEO EN VIVO: 01/01 - 1:25</div>
  </div>

  <div class="menu">
    <a href="#">CÓMO JUGAR DIARIA</a>
    <a href="#">DESCARGÁ GUÍA DE SUEÑOS</a>
    <a href="#">RESULTADOS NÚMEROS DE DIARIA</a>
  </div>

  <div class="resultados">
    <h2>RESULTADOS ANTERIORES</h2>
    <button>SELECCIONÁ LA FECHA</button>
    <div class="calendario">
      [Aquí va el calendario]
    </div>
  </div>

  <div class="seccion">
    <h2>CÓMO JUGAR Y GANAR</h2>
    <p>Venta en puntos autorizados. Escoge 3 números del 0 al 9.</p>
    <p><b>¿CÓMO SE JUEGA?</b><br>
      • Escoge 3 dígitos del 0 al 9.<br>
      • Compra tu boleto en un punto autorizado.<br>
      • Espera el sorteo en vivo y revisa si ganaste.
    </p>
  </div>

  <div class="acciones">
    <button>JUGÁ EN SORTEOS CONSECUTIVOS</button>
    <button>CONOCÉ LOS RESULTADOS</button>
    <button>RECLAMÁ TU PREMIO</button>
  </div>

  <div class="reglamento">
    <button>LEER EL REGLAMENTO</button>
  </div>
</html>
