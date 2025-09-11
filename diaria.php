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
            left: -50px;
            top: 20px;   /* mueve hacia abajo */
            /* mueve la imagen 10px a la izquierda */
        }
        .ganador {
    font-weight: bold;
    font-size: 26px;       /* tamaño de la letra */
    width: 450px;          /* ancho de la caja */
    text-align: center;    /* centrado del texto */
    margin-bottom: 17px;   /* distancia hacia los números */
    margin-top: 10px;     /* mueve hacia arriba */
}


        /* Contenido de los números */
        .ganador-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            top: 50px;
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
            font-size: 21px;
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
    border: 1px solid #438f4f;
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
/* RESULTADOS ANTERIORES */
.resultados .izquierda h2 {
  font-size: 34px;   /* más grande */
  color: #438f4f;
  margin-bottom: 15px;
  line-height: 1.2;
}
.resultados .izquierda .subtitulo {
  font-size: 28px;   /* tamaño debajo */
  display: block;    /* hace que "ANTERIORES" baje a otra línea */
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

/* RESULTADOS ANTERIORES */
.resultados .izquierda h2 {
  font-size: 34px;   /* más grande */
  color: #438f4f;
  margin-bottom: 15px;
  line-height: 1.2;
}

.resultados .izquierda .subtitulo {
  font-size: 28px;   /* tamaño debajo */
  display: block;    /* hace que "ANTERIORES" baje a otra línea */
}

/* Sorteos (hora arriba de los números) */
.resultados .derecha h3 {
  font-size: 18px;
  color: #438f4f;  /* azul para destacar */
  margin-bottom: 8px;
}

/* Label fecha más pequeño */
label-fecha {
  background: yellow;
  color: green;
  font-weight: bold;
  padding: 6px 12px;   /* reducido */
  border-radius: 15px;
  display: inline-block;
  font-size: 14px;
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
    background-color: #ffff00; /* amarillo */
    color: #438f4f;            /* verde */
    padding: 6px 12px;         /* espacio interno */
    border-radius: 12px;       /* esquinas redondeadas */
    font-weight: bold;
    text-align: center;
    margin: 10px 0;            /* separación de números y próximo sorteo */
    display: inline-block;  
    font-size: 20px;           /* tamaño de letra más grande */   
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



.accordion {
    border: 0px solid #438f4f;
    border-radius: 10px;
    margin: 20px 1cm; /* alineado con el div resultados */
    background: #438f4f; /* verde */
    color: white;
    font-weight: bold;
}

.accordion-header {
    display: flex;
    justify-content: center; /* centra horizontalmente */
    align-items: center;
    cursor: pointer;
    padding: 20px 20px; /* más espacio vertical */
    font-size: 24px; /* más grande */
    font-weight: bold;
    position: relative;
}

/* Flecha a la derecha */
.accordion-header .arrow {
    position: absolute;
    right: 20px; /* separada del borde derecho */
    transition: transform 0.3s;
    font-size: 28px; /* flecha más grande */
}


.accordion-content {
    display: none;
    padding: 15px 20px;
    background: #fafafaff; /* verde claro para el contenido */
    color: #000;
    font-weight: normal;
    font-size: 14px;
    border-top: 1px solid #080808ff;
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
<div class="col izquierda">
  <h2>
    RESULTADOS <br>
    <span class="subtitulo">ANTERIORES</span>
  </h2>

  <label class="label-fecha">
    SELECCIONÁ LA FECHA:
    <input type="date">
  </label>
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
    <h3>SORTEO 11:00 A.M.</h3>
    <div class="nums">
      <span class="num">1</span>
      <span class="num">5</span>
    </div>
  </div>
  <div class="sorteo">
    <h3>SORTEO 9:00 P.M.</h3>
    <div class="nums">
      <span class="num">8</span>
      <span class="num">3</span>
    </div>
  </div>
</div>


<!-- Accordion principal -->
<div class="accordion">
  <div class="accordion-header" onclick="toggleAccordion(this)">
    <span style="font-weight:bold; font-size:24px;">CÓMO JUGAR Y GANAR</span>
    <span class="arrow">▼</span>
  </div>
  <div class="accordion-content">
    <!-- Contenido principal alineado a la izquierda y a la par -->
    <div style="display:flex; align-items:flex-start; gap:20px; margin-bottom:15px;">
      
      <!-- Columna izquierda -->
      <div style="flex:1;">
        <h3 style="color:#aeca36; margin-bottom:10px;">¿CÓMO SE JUEGA?</h3>
        <img src="Diaria.webp" alt="Diaria" style="width:80px; height:auto;">
      </div>

      <!-- Columna derecha -->
      <div style="flex:2;">
        <p>
          SELECCIONA 1 NÚMERO DE DOS DÍGITOS DEL 00 AL 99 Y SI TU NÚMERO ES FAVORITO, GANA 50 VECES TU INVERSIÓN.
        </p>
        <p>DISPONIBLES DESDE L.5.</p>
      </div>
    </div>

    <!-- Sub-accordions -->
    <div class="sub-accordion">
      <div class="sub-accordion-header" onclick="toggleAccordion(this)" style="background:#438f4f; color:white; border-radius:10px; padding:10px 15px; margin-bottom:5px; display:flex; justify-content:space-between; align-items:center; cursor:pointer;">
        <span>JUEGA EN 3 SORTEOS CONSECUTIVOS</span>
        <span class="arrow" style="background:#aeca36; border-radius:50%; padding:5px;">▼</span>
      </div>
      <div class="sub-accordion-content" style="display:none; padding:10px 15px; background:#d9f0b2; border-radius:0 0 10px 10px; margin-bottom:10px;">
        Información sobre cómo jugar en 3 sorteos consecutivos.
      </div>

      <div class="sub-accordion-header" onclick="toggleAccordion(this)" style="background:#438f4f; color:white; border-radius:10px; padding:10px 15px; margin-bottom:5px; display:flex; justify-content:space-between; align-items:center; cursor:pointer;">
        <span>CONOCE LOS RESULTADOS</span>
        <span class="arrow" style="background:#aeca36; border-radius:50%; padding:5px;">▼</span>
      </div>
      <div class="sub-accordion-content" style="display:none; padding:10px 15px; background:#d9f0b2; border-radius:0 0 10px 10px; margin-bottom:10px;">
        Información sobre cómo ver los resultados.
      </div>

      <div class="sub-accordion-header" onclick="toggleAccordion(this)" style="background:#438f4f; color:white; border-radius:10px; padding:10px 15px; display:flex; justify-content:space-between; align-items:center; cursor:pointer;">
        <span>RECLAMA TU PREMIO</span>
        <span class="arrow" style="background:#aeca36; border-radius:50%; padding:5px;">▼</span>
      </div>
      <div class="sub-accordion-content" style="display:none; padding:10px 15px; background:#d9f0b2; border-radius:0 0 10px 10px;">
        Información sobre cómo reclamar tu premio.
      </div>
    </div>
  </div>
</div>

<!-- Script para abrir/cerrar accordion y sub-accordions -->
<script>
function toggleAccordion(header) {
    const content = header.nextElementSibling;
    const arrow = header.querySelector('.arrow');

    if (content.style.display === "block") {
        content.style.display = "none";
        arrow.style.transform = "rotate(0deg)";
    } else {
        content.style.display = "block";
        arrow.style.transform = "rotate(180deg)";
    }
}
</script>







    <div class="reglamento">
  <button onclick="window.open('reglamento.pdf', '_blank')">LEER EL REGLAMENTO</button>
  
</div>

</body>

</html> 