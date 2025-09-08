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
            padding: 20px 20px;
            /* antes 30px */
            color: #fff;
        }

        /* Contenedor interno para imagen + texto */
        .top-content {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-top: 20px;
            /* agrega espacio desde arriba */
        }

        /* Logo */
        .top img {
            width: 350px;
            height: auto;
            position: relative;
            left: -20px;
            /* mueve la imagen 10px a la izquierda */
        }
        .ganador {
    font-weight: bold;
    font-size: 21px;       /* tamaño de la letra */
    width: 300px;          /* ancho de la caja */
    text-align: center;    /* centrado del texto */
    margin-bottom: 10px;   /* distancia hacia los números */
    margin-top: -10px;     /* mueve hacia arriba */
}


        /* Contenido de los números */
        .ganador-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* centra horizontalmente dentro del bloque */
        }

        .ganador-box {
            display: flex;
            flex-direction: column;
            /* ya está vertical */
            align-items: center;
            /* centra horizontalmente */
        }

        .nums {
            margin-bottom: 12px;
        }

        .num {
            display: inline-block;
            background: #438f4f;
            /* verde */
            color: #fff;
            /* número en blanco */
            border-radius: 50%;
            padding: 12px 18px;
            margin: 0 5px;
            font-weight: bold;
            font-size: 18px;
        }

        .proximo {
            background: #ffd400;
            color: #000;
            padding: 6px 0;
            /* padding vertical */
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            width: 100%;
            /* mismo ancho que contenedor */
            max-width: fit-content;
            margin-top: 15px;
            /* aquí controlas cuánto baja debajo de los números */
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
            background: #438f4f;
            /* nuevo color verde */
            color: white;
            /* texto blanco */
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 25px;
            /* más redondeado */
            font-weight: bold;
            font-size: 14px;
            transition: background 0.3s;
            /* para efecto hover */
        }

        .menu a:hover {
            background: #367743;
            /* un verde un poco más oscuro al pasar el mouse */
        }

        /* Resultados anteriores */
        .resultados {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    border: 3px solid #438f4f;
    border-radius: 15px;
    padding: 25px;
    margin: 1cm;
    background: #fafafaff; 
}

/* Columnas */
.resultados .col {
    flex: 1;
    text-align: center;
}

/* Izquierda */
.resultados .izquierda h2 {
    font-size: 26px;
    color: #438f4f;
    margin-bottom: 15px;
}

.resultados .izquierda label {
    font-size: 18px;
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
}

.resultados .izquierda input[type="date"] {
    padding: 8px 12px;
    border-radius: 8px;
    border: 2px solid #aeca36;
    font-size: 16px;
}

/* Centro */
.resultados .centro .calendario {
    background: white;
    border: 2px solid #ccc;
    border-radius: 12px;
    padding: 50px;
    font-size: 16px;
    font-weight: bold;
    color: #555;
}

/* Derecha */
.resultados .derecha .sorteo {
    margin-bottom: 25px;
}

.resultados .derecha h3 {
    font-size: 20px;
    color: #ff6f00;
    margin-bottom: 10px;
}

/* Esferas verdes */
.resultados .num {
    display: inline-block;
    background: #438f4f;
    color: white;
    border-radius: 50%;
    padding: 15px 20px;
    margin: 0 6px;
    font-weight: bold;
    font-size: 20px;
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

/* Botón naranja redondeado */
.reglamento button {
  background: #ff6f00;
  color: white;
  border: none;
  padding: 14px 30px;
  border-radius: 25px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s;
}

.reglamento button:hover {
  background: #e65c00;
}

/* Flecha */
.reglamento .flecha {
  font-size: 24px;
  margin: 12px 0;
}

/* Texto azul */
.reglamento .nota {
  color: #0066cc;
  font-size: 14px;
  font-weight: bold;
}

        .etiqueta-hola {
    background-color: #ffd400; /* amarillo */
    color: #006400;            /* verde */
    padding: 6px 12px;         /* espacio interno */
    border-radius: 12px;       /* esquinas redondeadas */
    font-weight: bold;
    text-align: center;
    margin: 10px 0;            /* separación de números y próximo sorteo */
    display: inline-block;     
}

.resultados-anteriores {
  text-align: center;
  margin: 30px 0;
  font-family: Arial, sans-serif;
}

/* Título verde grande */
.resultados-anteriores h2 {
  font-size: 28px;
  color: green;
  margin-bottom: 20px;
}

/* Label amarillo redondeado */
.label-fecha {
  background: yellow;
  color: green;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 25px;
  display: inline-block;
  margin-bottom: 15px;
  font-size: 16px;
}

/* Input calendario dentro del label */
.label-fecha input[type="date"] {
  border: none;
  background: white;
  padding: 6px 10px;
  margin-left: 10px;
  border-radius: 6px;
  font-size: 14px;
}

/* Texto verde para sorteo */
.sorteo {
  margin-top: 15px;
  color: green;
  font-size: 20px;
  font-weight: bold;
}


    </style>
</head>

<body> <!-- Bloque superior -->
    <div class="top">
        <div class="top-content"> <!-- Logo a la izquierda --> <img src="Diaria.webp" alt="Diaria Loto"> <!-- Texto y números centrados -->
            <div class="ganador-box">
                <div class="ganador">ÚLTIMO NÚMERO GANADOR:</div>
                <div class="nums"> <span class="num">0</span> <span class="num">9</span> </div>
                 <!-- Etiqueta HOLA -->
    <div class="etiqueta-hola">PRÓXIMO SORTEO EN VIVO: 01/01 - 1:25</div>
            </div>
        </div>
    </div> <!-- Menú -->
    <div class="menu"> <a href="#">CÓMO JUGAR DIARIA</a> <a href="#">DESCARGÁ GUÍA DE SUEÑOS</a> <a href="#">RESULTADOS NÚMEROS DE DIARIA</a> </div> <!-- Resultados anteriores -->
    
    
    <div class="resultados">
    <!-- Columna izquierda -->
    <div class="resultados-anteriores">
  <h2>RESULTADOS ANTERIORES</h2>

  <!-- Label amarillo con calendario -->
  <label class="label-fecha">
    SELECCIONÁ LA FECHA:
    <input type="date">
  </label>

  <!-- Texto verde para sorteo -->
  <div class="sorteo">
    SORTEO 11:00 A.M.
  </div>
  <div class="sorteo">
    SORTEO 9:00 P.M.
  </div>
</div>



    <!-- Columna centro -->
    <div class="col centro">
        <div class="calendario">
             Aquí podría ir un calendario más grande o embebido
        </div>
    </div>

    <!-- Columna derecha -->
    <div class="col derecha">
        <div class="sorteo">
            
            <div class="nums">
                <span class="num">1</span>
                <span class="num">5</span>
            </div>
        </div>
        <div class="sorteo">
            
            <div class="nums">
                <span class="num">8</span>
                <span class="num">3</span>
            </div>
        </div>
    </div>
</div>


    <div class="reglamento">
  <button onclick="window.open('reglamento.pdf', '_blank')">LEER EL REGLAMENTO</button>
  
  <!-- Flecha hacia arriba -->
  <div class="flecha">⬆️</div>
  
  <!-- Texto en azul -->
  <div class="nota">
    ABRE EL REGLAMENTO EN UN PDF EN UNA NUEVA PESTAÑA
  </div>
</div>

</body>

</html> 