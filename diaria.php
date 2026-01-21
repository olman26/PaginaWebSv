<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>La Diaria</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Helvetica+Rounded:wght@400;700;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Helvetica Rounded', Arial, sans-serif;
    }

    body {
      background: #fff;
    }

    /* ================= HEADER ================= */

    /* ================= HEADER MEJORADO ================= */

.top {
  background: #aeca36;
  display: flex;
  justify-content: center;
  padding: 25px 10px; /* MENOS ALTO */
}

.top-content {
  display: flex;
  align-items: center; /* Centrado vertical con la imagen */
  max-width: 1300px;
  width: 100%;
  position: relative;
}

.top img {
  width: 330px; /* Imagen más grande */
  height: auto;
  margin-top: 70px;
  margin-left: 80px;
}

.ganador-box {
  text-align: center;
  color: white;
  margin-top: 10px;
  margin-left: 160px; /* Mantener la posición al lado de la imagen */
}

.ganador {
  font-weight: 900;
  font-size: 26px; /* Ligeramente más grande */
  margin-bottom: 15px;
}

.nums {
  margin-bottom: 10px;
}

.num {
  width: 65px; /* Un poco más grande */
  height: 65px;
  line-height: 65px;
  display: inline-block;
  background: #029247;
  border-radius: 50%;
  font-weight: bold;
  font-size: 24px; /* Un poco más grande */
  color: white;
  margin: 0 4px;
  border: 2px solid white;
  text-align: center;
}

.etiqueta-hola {
  background: yellow;
  color: green;
  padding: 6px 14px;
  border-radius: 20px;
  font-weight: 900;   /* MÁS BOLD */
  font-size: 18px;    /* Ligeramente más grande */
}

    /* ================= MENÚ MODERNO ================= */

    .menu {
      display: flex;
      justify-content: center;
      gap: 18px;
      background: #aeca36;
      padding: 16px;
      flex-wrap: wrap;
    }

    .menu a {
      background: linear-gradient(135deg, #029247, #05b36b);
      color: white;
      text-decoration: none;
      padding: 10px 22px;
      border-radius: 30px;
      font-size: 14px;
      font-weight: bold;
      transition: 0.3s;
      box-shadow: 0 4px 10px rgba(0,0,0,.25);
    }

    .menu a:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 14px rgba(0,0,0,.3);
    }

    .menu a:first-child {
  margin-right: 70px; /* mueve un poco "CÓMO JUGAR" hacia la izquierda */
}

.menu a:last-child {
  margin-left: 70px;  /* mueve un poco "RESULTADOS" hacia la derecha */
}

    /* ================= RESULTADOS ================= */

    .resultados {
      border: 1px solid #029247;
      display: flex;
      max-width: 1100px;
      margin: 40px auto;
      background: white;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.15);
      padding: 25px;
      gap: 20px;
    }

    .resultados .col {
      flex: 1;
      text-align: center;
    }

     /* COLUMNA IZQUIERDA - MÁS IMPONENTE Y CENTRADO */
.izquierda {
  display: flex;
  flex-direction: column;
  justify-content: center; /* Centrado vertical */
  align-items: flex-start; /* Mantener al lado izquierdo */
  gap: 15px;               /* Espacio entre elementos */
  min-height: 100%;         /* Para que tome todo el alto de la fila */
}

.izquierda h2 {
  font-size: 42px;     /* Más grande */
  font-weight: 900;    /* Muy bold */
  color: #029247;
  margin: 0;
  line-height: 1.1;
}

.label-fecha {
  font-size: 18px;     /* Más grande */
  font-weight: 700;
  background: yellow;  /* Mantener color que ya tenías */
  color: green;
  padding: 8px 16px;
  border-radius: 20px;
  display: inline-block;
  margin-left: 35px;  /* Mueve un poco a la derecha */
}

/* ================= CALENDARIO ULTRA MODERNO COMPACTO ================= */

.calendario-real {
  background: linear-gradient(145deg, #ffffff, #f4f4f4);
  border-radius: 16px;
  padding: 12px 14px;       /* MÁS PEQUEÑO */
  box-shadow: 0 8px 18px rgba(0,0,0,0.15);
  border: 1px solid #e5e5e5;
  max-width: 260px;        /* TAMAÑO CONTROLADO */
  margin: auto;
}

.calendario-real table {
  width: 100%;
  border-collapse: collapse;
  text-align: center;
}

.calendario-real th {
  font-size: 12px;         /* MÁS PEQUEÑO */
  font-weight: 800;
  color: #029247;
  padding: 6px 0;
  text-transform: uppercase;
}

.calendario-real td {
  padding: 7px 0;         /* MÁS PEQUEÑO */
  font-weight: 700;
  font-size: 13px;
  color: #444;
  cursor: pointer;
  transition: 0.25s;
  border-radius: 50%;
}

.calendario-real td:hover {
  background: rgba(2,146,71,0.15);
}

.calendario-real td.activo {
  background: linear-gradient(135deg, #029247, #05b36b);
  color: white;
  box-shadow: 0 4px 10px rgba(0,0,0,0.25);
}

/* ================= FILTROS PREMIUM COMPACTOS ================= */

.filtros {
  gap: 6px;
  margin-bottom: 10px;
}

.filtros select {
  padding: 6px 12px;      /* MÁS PEQUEÑO */
  font-size: 13px;
  border-radius: 10px;
  border: none;
  background: #f3f3f3;
  box-shadow: inset 0 2px 5px rgba(0,0,0,0.15);
  cursor: pointer;
  font-weight: 700;
  color: #029247;
  transition: 0.3s;
}

.filtros select:hover {
  background: #e9e9e9;
}

    /* ================= SORTEOS MEJORADOS ================= */

.derecha {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.derecha .sorteo {
  margin-bottom: 20px;
  text-align: center;
}

.derecha h3 {
  font-size: 20px;        /* Más grande */
  font-weight: 900;      /* ULTRA BOLD */
  color: #029247;
  margin-bottom: 12px;
  text-align: center;    /* Bien centrado */
  letter-spacing: 0.5px;
}

/* NÚMEROS DEL SORTEO */
.derecha .num {
  width: 52px;
  height: 52px;
  line-height: 52px;
  display: inline-block;
  background: #029247;
  border-radius: 50%;
  font-weight: 900;
  font-size: 20px;
  color: white;
  margin: 0 6px;
  border: 2px solid white;
  text-align: center;
}

    /* ================= ACCORDION ================= */

    .accordion {
      max-width: 1100px;
      margin: 30px auto;
      border-radius: 15px;
      overflow: hidden;
      background: white; /*  FONDO BLANCO */
      border: 2px solid #029247; /* BORDE VISIBLE */
    }

    .accordion-header {
      padding: 18px;
      text-align: center;
      color: white;
      font-weight: bold;
      font-size: 24px;
      cursor: pointer;
      position: relative;
      background: #029247;
    }

    .accordion-header .arrow {
      position: absolute;
      right: 20px;
      font-size: 26px;
    }

    .accordion-content {
      display: none;
      padding: 20px;
      background: white;
    }

    /* SUB-ACORDEONES */
/* ================= SUB-ACORDEONES MEJORADOS ================= */
.sub-accordion-header {
  background: #029247; /* Verde más intenso */
  color: white;
  padding: 14px 20px;
  margin-bottom: 10px;
  border-radius: 12px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  font-weight: 600;
  font-size: 20px; /* Letra más grande y legible */
  box-shadow: 0 3px 6px rgba(0,0,0,0.1); /* Sombra suave */
  transition: background 0.3s;
}

/* Hover opcional */
.sub-accordion-header:hover {
  background: #03b454; /* Verde más claro al pasar mouse */
}

/* CÍRCULO DE LA FLECHA */
.sub-accordion-header span {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #b4e5b0; /* Verde claro */
  color: #ffffff;      /* Flecha blanca */
  font-size: 18px;
  flex-shrink: 0;
  transition: transform 0.3s;
}

/* Girar flecha al abrir */
.sub-accordion-header.active span {
  transform: rotate(180deg);
}

/* CONTENIDO DE SUB-ACORDEONES */
.sub-accordion-content {
  display: none;
  padding: 15px 20px;
  background: white; /* Fondo blanco */
  border-radius: 0 0 12px 12px;
  margin-bottom: 12px;
  font-size: 17px; /* Texto más legible */
  font-weight: 600;
  line-height: 1.5; /* Espaciado de línea para lectura */
}

 /*  TODO EN HELVETICA ROUNDED SEMIBOLD */
body {
  font-family: 'Helvetica Rounded', Arial, sans-serif;
  font-weight: 600;
}

/* BLOQUE SUPERIOR DEL ACCORDION */
/* ================= INFO-JUEGO MEJORADA ================= */
.info-juego {
  margin-bottom: 30px;
  padding: 20px;
  background: #ffffff; /* Fondo blanco */
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08); /* Sombra sutil */
}

/* SLOGAN PRINCIPAL */
.slogan {
  text-align: center; /* Centrado para resaltar */
  font-size: 22px;
  font-weight: 700;
  color: #029247; /* Verde destacado */
  margin-bottom: 12px;
  line-height: 1.4;
}

/* DESCRIPCIÓN */
.descripcion {
  text-align: center;
  font-size: 17px;
  font-weight: 600;
  color: #333; /* Gris oscuro para mejor lectura */
  margin-bottom: 20px;
  line-height: 1.5;
}

/* SUBTÍTULO */
.subtitulo-verde {
  text-align: center;
  font-size: 20px;
  font-weight: 700;
  color: #029247;
  margin-bottom: 15px;
}

/* TEXTO + IMAGEN AL LADO */
.linea-juego {
  display: flex;
  align-items: flex-start; /* Ajuste arriba para que texto se alinee con imagen */
  gap: 16px;
  margin-top: 15px;
  font-size: 16px;
  font-weight: 600;
  color: #333;
  line-height: 1.5;
}

/* IMAGEN */
.img-diaria {
  width: 75px;
  height: auto;
  flex-shrink: 0;
  border-radius: 6px; /* Bordes suaves */
}

/* ================= SUB-ACORDEONES ================= */
.sub-accordion-header {
  background: #029247; /* Verde principal */
  color: white;
  padding: 14px 20px;
  margin-bottom: 10px;
  border-radius: 12px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  font-weight: 600;
  font-size: 20px;
  transition: background 0.3s;
}

/* Hover opcional */
.sub-accordion-header:hover {
  background: #03b454;
}

/* CÍRCULO DE LA FLECHA */
.sub-accordion-header span {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #c6e3b3; /* Verde más suave y elegante */
  color: #029247;      /* Flecha verde oscuro */
  font-size: 18px;
  flex-shrink: 0;
  transition: transform 0.3s;
}

/* Girar flecha al abrir */
.sub-accordion-header.active span {
  transform: rotate(180deg);
}

/* CONTENIDO DE SUB-ACORDEONES */
.sub-accordion-content {
  display: none;
  padding: 15px 20px;
  background: white; /* Fondo blanco */
  border-radius: 0 0 12px 12px;
  margin-bottom: 12px;
  font-size: 16px;
  font-weight: 600;
  line-height: 1.5;
  color: #333;
}
    /* ================= BOTÓN ================= */

    .reglamento {
      text-align: center;
      margin: 40px 0;
    }

    .reglamento button {
      background: #ff6f00;
      color: white;
      padding: 14px 30px;
      border-radius: 30px;
      border: none;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }

    .calendario-real td.activo {
    background: linear-gradient(135deg, #029247, #05b36b); /* Fondo verde */
    color: white;
    border-radius: 50%; /* Hace el fondo circular */
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25); /* Sombra sutil para el efecto de resaltar */
}


/* ================= FIX HEADER LA DIARIA – SOLO MÓVIL ================= */
@media (max-width: 768px) {

  /* Header contenedor */
  .top {
    padding: 20px 10px;
  }

  .top-content {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  /* LOGO */
  .top img {
    width: 220px;
    max-width: 90%;
    margin: 0 auto 15px auto;
  }

  /* Caja de resultados */
  .ganador-box {
    margin: 0;
    text-align: center;
  }

  .ganador {
    font-size: 20px;
    margin-bottom: 10px;
  }

  /* NÚMEROS */
  .num {
    width: 48px;
    height: 48px;
    line-height: 48px;
    font-size: 18px;
    margin: 0 3px;
  }

  /* CONTADOR */
  .etiqueta-hola {
    font-size: 15px;
    padding: 6px 12px;
    margin-top: 10px;
  }

  /* MENÚ */
  .menu {
    gap: 10px;
    padding: 12px;
  }

  .menu a {
    width: 100%;
    text-align: center;
    margin: 0;
  }

  .menu a:first-child,
  .menu a:last-child {
    margin: 0;
  }

  /* RESULTADOS */
  .resultados {
    flex-direction: column;
    padding: 20px 15px;
  }

  .izquierda {
    align-items: center;
    text-align: center;
  }

  .izquierda h2 {
    font-size: 28px;
  }

  .label-fecha {
    margin-left: 0;
  }

}

@media (max-width: 768px) {

  /* Ya tenés tus estilos móviles existentes */

  /* Bajamos todo el contenido del header */
  .top-content {
      margin-top: 200px; /* Ajusta este valor según cuánto quieras bajarlo */
  }

}



  </style>
</head>

<body>

  <!-- HEADER -->
  <div class="top">
    <div class="top-content">
      <img src="/ImagesSV/LOGO DIARIA.svg">

      <div class="ganador-box">
        <div class="ganador">ÚLTIMO NÚMERO GANADOR</div>

        <div class="nums">
  <span class="num" id="num1">0</span>
  <span class="num" id="num2">0</span>
</div>

        <div class="etiqueta-hola">
  PRÓXIMO SORTEO EN VIVO:
  <span id="horaHeader">00</span>:
  <span id="minHeader">00</span>:
  <span id="segHeader">00</span>
</div>
      </div>
    </div>
  </div>

  <!-- MENÚ -->
  <div class="menu">
    <a href="https://juega.loto.sv/websales/" target="_blank">JUGÁ AQUÍ</a>
    <a href="/ImagesSV/documentos/Diaria Tabla de señales.pdf" download>
  SEÑALES QUE TE HACEN GANAR
</a>


  </div>

  <!-- RESULTADOS -->
  <div class="resultados">

    <div class="col izquierda">
      <h2>RESULTADOS ANTERIORES</h2>
      <div class="label-fecha">SELECCIONÁ LA FECHA</div>
    </div>

    <div class="col calendario">
      

  <!-- FILTROS MODERNOS -->
  <div class="filtros">
    <select id="filtro-mes">
      <option value="01">Enero</option>
      <option value="02">Febrero</option>
      <option value="03">Marzo</option>
      <option value="04">Abril</option>
      <option value="05">Mayo</option>
      <option value="06">Junio</option>
      <option value="07">Julio</option>
      <option value="08">Agosto</option>
      <option value="09">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
    </select>

    <select id="filtro-ano">
      <option value="2024">2024</option>
      <option value="2025">2025</option>
      <option value="2026">2026</option>
    </select>
  </div>

  <!-- CALENDARIO MODERNO -->
  <div class="calendario-real">
    <table>
      <thead>
        <tr>
          <th>DOM</th><th>LUN</th><th>MAR</th><th>MIE</th><th>JUE</th><th>VIE</th><th>SAB</th>
        </tr>
      </thead>
      <tbody>
        <tr><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
        <tr><td>6</td><td>7</td><td>8</td><td>9</td><td class="activo">10</td><td>11</td><td>12</td></tr>
        <tr><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td></tr>
        <tr><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td></tr>
        <tr><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td></td><td></td></tr>
      </tbody>
    </table>
  </div>

</div>

    <div class="col derecha">
  <div class="sorteo">
    <h3>SORTEO 11:00 A.M.</h3>
    <span class="num" id="num11_1">0</span>
    <span class="num" id="num11_2">0</span>
  </div>

  <div class="sorteo">
    <h3>SORTEO 9:00 P.M.</h3>
    <span class="num" id="num21_1">0</span>
    <span class="num" id="num21_2">0</span>
  </div>
</div>
</div>



  <!-- ACCORDION -->
<div class="accordion">

  <div class="accordion-header" onclick="toggle(this)">
    CÓMO JUGAR Y GANAR
    <span class="arrow">▼</span>
  </div>

  <div class="accordion-content">

    <!--TEXTO NUEVO ARRIBA DE LOS SUB ACORDEONES -->
    <div class="info-juego">


      <p class="descripcion">
        ¡LAS SEÑALES TE HACEN GANAR TODOS LOS DIAS CON DIARIA! VISITÁ NUESTROS PUNTOS DE VENTA LOTO, COMPRAS EN LÍNEA, LOTOCENTRO METROCENTRO SAN SALVADOR O KIOSCO LOTO
         METROCENTRO SANTA ANA PARA ADQUIRIR TU BOLETO.
      </p>

      <p class="subtitulo-verde">¿CÓMO SE JUEGA?</p>

      <!-- BLOQUE 1 CON IMAGEN -->
      <div class="linea-juego">
        <img src="/ImagesSV/Diaria.webp" class="img-diaria">
        <p>
          SELECCIONÁ 1 NÚMERO DEL 00 AL 99.  
          SI TU NÚMERO ES FAVORECIDO GANÁS  
          <strong>60 VECES TU COMPRA.</strong><br>
          DISPONIBLE DESDE <strong>$0.25</strong>
        </p>
      </div> 

    </div>
    <!-- FIN DEL TEXTO -->

    <!-- TUS SUB ACORDEONES ORIGINALES -->
    <div class="sub-accordion-header" onclick="toggle(this)">
      JUGÁ MULTISORTEOS
      <span>▼</span>
    </div>
    <div class="sub-accordion-content">Disponible en nuestros puntos de venta Loto, compras en línea, LotoCentro Metrocentro San Salvador o Kiosco Loto Metrocentro Santa Ana.
      <br>

Jugá con tu número favorito para varios sorteos. Se puede comprar un máximo de 10 sorteos.
 </div>

    <div class="sub-accordion-header" onclick="toggle(this)">
      CONOCÉ LOS RESULTADOS
      <span>▼</span>
    </div>
    <div class="sub-accordion-content">Sintonizando los sorteos de las 11:00 a.m. y 9:00 p.m. por Canal 4, Facebook y YouTube Live. Podés acercarte a tu punto de venta Loto
       más cercano, visitar las redes sociales Facebook, Instagram o YouTube como Loto El Salvador. También está a disposición la línea de resultados marcando al 2555-7900
      opción 1.</div>

    <div class="sub-accordion-header" onclick="toggle(this)">
      RECLAMA TU PREMIO
      <span>▼</span>
    </div>
    <div class="sub-accordion-content">Si resultaste ganador, podés cambiar tu premio en cualquier punto de venta Loto:
      <br>
      <br>

» Revisá que tus números y jugadas estén correctas.
<br>
<br>

» Escribí tus datos personales (nombre completo, DUI y teléfono) al reverso del boleto para que seas la única persona que pueda cambiar el premio.
<br>
<br>

Si resultaste ganador en compras en línea, seguí estos pasos:
<br>
<br>
» Ingresá a tu cuenta, hacé click en la parte superior derecha
<br>
<br>

» Hacé click en Mi LotoSaldo y seleccioná la opción “retirar fondos”
<br>
<br>

» Colocá la cantidad de fondos a retirar.
<br>
<br>

» Recibirás un correo electrónico con tu cupón de retiro que podés cambiar en cualquiera de los puntos de venta Loto a nivel nacional.</div>

  </div>
</div>

  <!-- BOTÓN -->
  <!-- BOTÓN REGLAMENTO -->
<div class="reglamento">
  <a href="/ImagesSV/documentos/Reglamento La Diaria El Salvador.pdf" target="_blank">
    <button class="btn-reglamento">
       LEER EL REGLAMENTO
    </button>
  </a>
</div>

  <script>
    function toggle(h) {
      let c = h.nextElementSibling;
      c.style.display = (c.style.display === "block") ? "none" : "block";
    }
  </script>



<script>
const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let hoy = new Date();
let dia = hoy.getDate();
let horaActual = hoy.getHours();
let HoraSorteo = "";

// Horarios de sorteo
if (horaActual < 11) {
  HoraSorteo = 11;
} else if (horaActual >= 11 && horaActual < 21) {
  HoraSorteo = 21;
} else {
  HoraSorteo = 11;
  dia += 1;
}

// Fecha del próximo sorteo
let countDown = new Date(
  hoy.getFullYear(),
  hoy.getMonth(),
  dia,
  HoraSorteo
).getTime();

Number.prototype.padStart = function(n, str){
  return Array(n - String(this).length + 1).join(str || '0') + this;
};

let x = setInterval(function () {
  let now = new Date().getTime();
  let distance = countDown - now;

  let h = Math.floor((distance % day) / hour).padStart(2, "0");
  let m = Math.floor((distance % hour) / minute).padStart(2, "0");
  let s = Math.floor((distance % minute) / second).padStart(2, "0");

  document.getElementById("horaHeader").innerText = h;
  document.getElementById("minHeader").innerText = m;
  document.getElementById("segHeader").innerText = s;

  if (distance <= 0) {
    clearInterval(x);
    document.querySelector(".etiqueta-hola").innerText = "¡SORTEO EN VIVO!";
  }
}, second);
</script>

<script>
  // Fetch para obtener los resultados de la API
  fetch('/api/resultado-diaria.php')
    .then(r => r.json())
    .then(d => {
      if (!d.error) {

        // HEADER (ya lo tenías)
        document.getElementById("num1").innerText = d.digito1;
        document.getElementById("num2").innerText = d.digito2;

        // SORTEO 11:00 AM
        document.getElementById("num11_1").innerText = d.digito1;
        document.getElementById("num11_2").innerText = d.digito2;

        // SORTEO 9:00 PM
        document.getElementById("num21_1").innerText = d.digito1;
        document.getElementById("num21_2").innerText = d.digito2;

      } else {
        console.error(d.error);
      }
    })
    .catch(err => console.error(err));

  // Evento para renderizar el calendario una vez cargue la página
  document.addEventListener('DOMContentLoaded', function () {
    const mesSelect = document.getElementById('filtro-mes');
    const anoSelect = document.getElementById('filtro-ano');
    const calendario = document.querySelector('.calendario-real table tbody');

    // Función para renderizar el calendario
    function renderizarCalendario(mes, ano) {
      // Primer día del mes
      const primerDia = new Date(ano, mes - 1, 1);
      const ultimoDia = new Date(ano, mes, 0); // Último día del mes

      // Día de la semana del primer día (0 = domingo, 6 = sábado)
      const diaInicio = primerDia.getDay();
      const cantidadDias = ultimoDia.getDate(); // Número de días del mes

      // Limpiar el calendario actual
      calendario.innerHTML = '';

      // Obtener la fecha actual
      const hoy = new Date();
      const diaHoy = hoy.getDate();
      const mesHoy = hoy.getMonth() + 1; // Los meses empiezan desde 0, así que se suma 1
      const anoHoy = hoy.getFullYear();

      // Generar las filas del calendario
      let fila = document.createElement('tr');

      // Añadir celdas vacías para los días antes del primer día
      for (let i = 0; i < diaInicio; i++) {
        fila.appendChild(document.createElement('td'));
      }

      // Añadir los días del mes
      for (let dia = 1; dia <= cantidadDias; dia++) {
        const celda = document.createElement('td');
        celda.textContent = dia;

        // Resaltar el día actual con un círculo verde
        if (dia === diaHoy && mesHoy === mes && anoHoy === ano) {
          celda.classList.add('activo'); // Se agrega la clase 'activo' para resaltar el día actual
        }

        fila.appendChild(celda);

        // Si hemos llegado al final de la semana (sábado), agregamos una nueva fila
        if ((dia + diaInicio) % 7 === 0) {
          calendario.appendChild(fila);
          fila = document.createElement('tr');
        }
      }

      // Añadir la fila final (si hay días que no completan la última semana)
      if (fila.children.length > 0) {
        calendario.appendChild(fila);
      }
    }

    // Evento para cambiar el mes y año seleccionado
    mesSelect.addEventListener('change', function () {
      const mesSeleccionado = mesSelect.value;
      const anoSeleccionado = anoSelect.value;
      renderizarCalendario(mesSeleccionado, anoSeleccionado);
    });

    anoSelect.addEventListener('change', function () {
      const mesSeleccionado = mesSelect.value;
      const anoSeleccionado = anoSelect.value;
      renderizarCalendario(mesSeleccionado, anoSeleccionado);
    });

    // Renderizar el calendario inicial con el mes y año actuales
    const hoy = new Date();
    const mesActual = hoy.getMonth() + 1; // +1 porque los meses en JavaScript comienzan en 0
    const anoActual = hoy.getFullYear();

    // Seleccionar el año actual en el combobox
    anoSelect.value = anoActual;

    // Asegurarse de que el mes también sea el actual
    mesSelect.value = mesActual < 10 ? '0' + mesActual : mesActual;

    renderizarCalendario(mesActual, anoActual);
  });
</script>

<script>
  function pad2(num) {
    return num.toString().padStart(2, '0');
  }

  // Función para actualizar los resultados
  function actualizarResultados(fecha) {
    fetch(`https://wslotosalvador-d2hbanggbucganbt.canadacentral-01.azurewebsites.net/api/resultados_calendario_diaria.php?fecha=${fecha}`)
      .then(res => res.json())
      .then(data => {
        document.getElementById('num11_1').innerText = data['11:00'] ? data['11:00'].charAt(0) : '0';
        document.getElementById('num11_2').innerText = data['11:00'] ? data['11:00'].charAt(1) : '0';
        document.getElementById('num21_1').innerText = data['21:00'] ? data['21:00'].charAt(0) : '0';
        document.getElementById('num21_2').innerText = data['21:00'] ? data['21:00'].charAt(1) : '0';
      })
      .catch(err => console.error('Error al obtener resultados:', err));
  }

  document.addEventListener('DOMContentLoaded', function () {
    const mesSelect = document.getElementById('filtro-mes');
    const anoSelect = document.getElementById('filtro-ano');
    const calendario = document.querySelector('.calendario-real table tbody');

    function renderizarCalendario(mes, ano) {
      const primerDia = new Date(ano, mes - 1, 1);
      const ultimoDia = new Date(ano, mes, 0);
      const diaInicio = primerDia.getDay();
      const cantidadDias = ultimoDia.getDate();

      calendario.innerHTML = '';

      const hoy = new Date();
      const diaHoy = hoy.getDate();
      const mesHoy = hoy.getMonth() + 1;
      const anoHoy = hoy.getFullYear();

      let fila = document.createElement('tr');

      for (let i = 0; i < diaInicio; i++) {
        fila.appendChild(document.createElement('td'));
      }

      for (let dia = 1; dia <= cantidadDias; dia++) {
        const celda = document.createElement('td');
        celda.textContent = dia;

        // Día actual
        if (dia === diaHoy && mesHoy === mes && anoHoy === ano) {
          celda.classList.add('activo');
          actualizarResultados(`${ano}-${pad2(mes)}-${pad2(dia)}`); // mostrar resultados del día actual
        }

        // Evento click para cada celda
        celda.addEventListener('click', function () {
          // Quitar clase 'activo' de todas
          calendario.querySelectorAll('td.activo').forEach(a => a.classList.remove('activo'));
          celda.classList.add('activo');

          const fecha = `${ano}-${pad2(mes)}-${pad2(dia)}`;
          actualizarResultados(fecha);
        });

        fila.appendChild(celda);

        if ((dia + diaInicio) % 7 === 0) {
          calendario.appendChild(fila);
          fila = document.createElement('tr');
        }
      }

      if (fila.children.length > 0) {
        calendario.appendChild(fila);
      }
    }

    // Cambios de mes y año
    function actualizarCalendario() {
      renderizarCalendario(parseInt(mesSelect.value), parseInt(anoSelect.value));
    }

    mesSelect.addEventListener('change', actualizarCalendario);
    anoSelect.addEventListener('change', actualizarCalendario);

    // Render inicial
    const hoy = new Date();
    anoSelect.value = hoy.getFullYear();
    mesSelect.value = pad2(hoy.getMonth() + 1);
    renderizarCalendario(hoy.getMonth() + 1, hoy.getFullYear());
  });
</script>






</body>
</html>
