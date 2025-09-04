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

    /* Div superior centrado */
.top {
  background: #aeca36;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 20px; /* menos alto */
  color: #fff;
}

/* Contenedor interno para imagen + texto */
.top-content {
  display: flex;
  align-items: flex-start; /* alineamos desde arriba */
  gap: 30px;
  margin-top: 0; /* eliminamos margen extra */
}


    /* Logo */
    .top img {
    width: 300px;
    height: auto;
    position: relative;
    left: -10px; /* mueve la imagen 10px a la izquierda */
    }


    /* Contenido de los números */
.ganador-box {
  display: flex;
  flex-direction: column; /* vertical */
  align-items: center;    /* centrado horizontal */
}

    .ganador-box {
     display: flex;
     flex-direction: column; /* ya está vertical */
     align-items: center;    /* centra horizontalmente */
     }


    /* Números */
.nums {
  margin: 10px 0 5px 0; /* margen entre números y texto de próximo sorteo */
}

    .num {
      display: inline-block;
      background: #438f4f; /* verde */
      color: #fff;          /* número en blanco */
      border-radius: 50%;
      padding: 12px 18px;
      margin: 0 5px;
      font-weight: bold;
      font-size: 18px;
    }

    /* Próximo sorteo */
.proximo {
  background: #ffd400;
  color: #000;
  padding: 6px 12px; 
  border-radius: 20px;
  font-weight: bold;
  font-size: 14px;
  text-align: center;
  margin-top: 0; /* ya no necesitamos espacio extra */
}



    /* Menú */
    .menu {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      background: #aeca36;
      padding: 12px;
    }

    .menu a {
     background: #438f4f; /* nuevo color verde */
     color: white;        /* texto blanco */
     text-decoration: none;
     padding: 8px 15px;
     border-radius: 25px; /* más redondeado */
     font-weight: bold;
     font-size: 14px;
     transition: background 0.3s; /* para efecto hover */
    }

    .menu a:hover {
    background: #367743; /* un verde un poco más oscuro al pasar el mouse */
    }


    /* Resultados anteriores */
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
      background: #aeca36;
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

    /* Cómo jugar */
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

    /* Botones de acción */
    .acciones {
      text-align: center;
      margin: 20px 0;
    }

    .acciones button {
      display: block;
      margin: 12px auto;
      background: #aeca36;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      font-size: 14px;
    }

    .acciones button:hover {
      background: #8ea22c;
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
      padding: 14px 30px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Bloque superior -->
  <div class="top">
    <div class="top-content">
      <!-- Logo a la izquierda -->
      <img src="Diaria.webp" alt="Diaria Loto">

      <!-- Texto y números centrados -->
      <div class="ganador-box">
        <div class="ganador">ÚLTIMO NÚMERO GANADOR:</div>
        <div class="nums">
          <span class="num">0</span>
          <span class="num">9</span>
        </div>
        <div class="proximo">PRÓXIMO SORTEO EN VIVO: 01/01 - 1:25</div>
      </div>
    </div>
  </div>

  <!-- Menú -->
  <div class="menu">
    <a href="#">CÓMO JUGAR DIARIA</a>
    <a href="#">DESCARGÁ GUÍA DE SUEÑOS</a>
    <a href="#">RESULTADOS NÚMEROS DE DIARIA</a>
  </div>

  <!-- Resultados anteriores -->
  <div class="resultados">
    <h2>RESULTADOS ANTERIORES</h2>
    <button>SELECCIONÁ LA FECHA</button>
    <div class="calendario">
      [Aquí va el calendario]
    </div>
  </div>

  <!-- Cómo jugar -->
  <div class="seccion">
    <h2>CÓMO JUGAR Y GANAR</h2>
    <p>Venta en puntos autorizados. Escoge 3 números del 0 al 9.</p>
    <p><b>¿CÓMO SE JUEGA?</b><br>
      • Escoge 3 dígitos del 0 al 9.<br>
      • Compra tu boleto en un punto autorizado.<br>
      • Espera el sorteo en vivo y revisa si ganaste.
    </p>
  </div>

  <!-- Botones de acción -->
  <div class="acciones">
    <button>JUGÁ EN SORTEOS CONSECUTIVOS</button>
    <button>CONOCÉ LOS RESULTADOS</button>
    <button>RECLAMÁ TU PREMIO</button>
  </div>

  <!-- Reglamento -->
  <div class="reglamento">
    <button>LEER EL REGLAMENTO</button>
  </div>
</body>
</html>
