<?php
// ================= CONEXIÓN SQL SERVER =================
try {
    $conn = new PDO(
        "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
        "LotoAdmin",
        "LotAdmin1.",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
 
// ================= OBTENER DATOS =================
$stmt = $conn->query("SELECT * FROM paginaweb_sv_diaria WHERE id = 1");
$config = $stmt->fetch(PDO::FETCH_ASSOC);
?>
 
<?php
// ================= ÚLTIMO RESULTADO DIARIA SV =================
$stmtUltimo = $conn->prepare("
    SELECT TOP 1 par1
    FROM numeros_ganadores_sorteos_prod
    WHERE pais = 'El Salvador'
      AND UPPER(game_name) = 'DIARIA'
      AND par1 IS NOT NULL
    ORDER BY draw_date DESC
");
 
$stmtUltimo->execute();
$ultimo = $stmtUltimo->fetch(PDO::FETCH_ASSOC);
 
$u1 = '0';
$u2 = '0';
 
if ($ultimo && $ultimo['par1'] !== null) {
    $num = str_pad($ultimo['par1'], 2, '0', STR_PAD_LEFT);
    $u1 = $num[0];
    $u2 = $num[1];
}
?>
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
 
  /* Bajamos todo el contenido del header */
  .top-content {
      margin-top: 280px; /* Ajusta este valor según cuánto quieras bajarlo */
  }
 
}
 
.linea-juego {
  display: flex;
  flex-wrap: wrap;        /* Para que sea responsive */
  align-items: center;    /* Centrado vertical */
  gap: 20px;              /* Espacio entre imagen y texto */
  margin-top: 20px;
  background: #f8f9fa;    /* Fondo suave para resaltar */
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08); /* Sombra sutil */
}
 
.img-container {
  flex: 0 0 120px;        /* Ancho fijo de la imagen */
  display: flex;
  justify-content: center;
  align-items: center;
}
 
.img-diaria {
  width: 100%;
  height: auto;
  border-radius: 10px;
  object-fit: cover;
  transition: transform 0.3s;
}
 
.img-diaria:hover {
  transform: scale(1.05); /* Animación ligera al pasar el mouse */
}
 
.texto-principal {
  flex: 1;
  font-size: 16px;
  font-weight: 600;
  color: #333;
  line-height: 1.6;
}
  </style>
</head>
 
<body>
 
  <!-- HEADER -->
  <div class="top">
    <div class="top-content">
      <img src="<?= !empty($config['logo']) ? $config['logo'] : '/ImagesSV/LOGO DIARIA.svg' ?>" alt="Logo Diaria">
 
      <div class="ganador-box">
        <div class="ganador">ÚLTIMO NÚMERO GANADOR</div>
 
        <div class="nums">
  <span class="num"><?= $u1 ?></span>
<span class="num"><?= $u2 ?></span>
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
 
    <div class="col derecha" id="resultadosCalendario"></div>
</div>
 
  <!-- ACCORDION -->
<div class="accordion">
 
  <div class="accordion-header" onclick="toggle(this)">
    <!-- SUBTÍTULO EDITABLE -->
    <?= htmlspecialchars($config['titulo1']) ?>
    <span class="arrow">▼</span>
  </div>
 
  <div class="accordion-content">
 
  <div class="info-juego">
    <!-- TEXTO PRINCIPAL EDITABLE -->
    <p class="descripcion">
      <?= nl2br(htmlspecialchars($config['contenido1'])) ?>
    </p>
 
    <!-- IMAGEN FIJA QUE NUNCA CAMBIA -->
    <div class="linea-juego">
    <div class="img-container">
        <img src="/ImagesSV/Diaria.webp" class="img-diaria" alt="Imagen Diaria">
    </div>
    <div class="texto-principal">
        <?= nl2br(htmlspecialchars($config['contenido_principal'])) ?>
    </div>
</div>
  </div>
 
 
  <!-- SUB-ACORDEONES DINÁMICOS -->
  <div class="sub-accordion-header" onclick="toggle(this)">
    <?= htmlspecialchars($config['titulo2']) ?>
    <span>▼</span>
  </div>
  <div class="sub-accordion-content">
    <?= nl2br(htmlspecialchars($config['contenido2'])) ?>
  </div>
 
  <div class="sub-accordion-header" onclick="toggle(this)">
    <?= htmlspecialchars($config['titulo3']) ?>
    <span>▼</span>
  </div>
  <div class="sub-accordion-content">
    <?= nl2br(htmlspecialchars($config['contenido3'])) ?>
  </div>
 
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
 
// Horarios de sorteo: 11:00 A.M., 6:00 P.M. y 9:00 P.M.
if (horaActual < 11) {
  HoraSorteo = 11;
} else if (horaActual >= 11 && horaActual < 18) {
  HoraSorteo = 18;
} else if (horaActual >= 18 && horaActual < 21) {
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
function pintarDiariaSV(titulo, data){
  if(!data || data.par1 === undefined || data.par1 === null) return '';
 
  const valor = String(data.par1).trim();
  if(valor === '' || valor === '0' || valor === '00') return '';
 
  const num = valor.padStart(2,'0');
 
  return `
    <div class="sorteo">
      <h3>${titulo}</h3>
      <span class="num">${num[0]}</span>
      <span class="num">${num[1]}</span>
    </div>
  `;
}
 
function cargarResultadosDiariaSV(fecha){
  fetch(`/api/resultados_diaria_sv.php?fecha=${fecha}`)
    .then(r=>r.json())
    .then(d=>{
      console.log("SV:", d);
 
      const html = [
        pintarDiariaSV('SORTEO 11:00 A.M.', d['11']),
        pintarDiariaSV('SORTEO 6:00 P.M.', d['18']),
        pintarDiariaSV('SORTEO 9:00 P.M.', d['21'])
      ].join('');
 
      document.getElementById('resultadosCalendario').innerHTML =
        html || '<div class="sorteo"><h3>Sin resultados aún para esta fecha</h3></div>';
 
      // HEADER = último disponible
      let header = d['21'] || d['18'] || d['11'];
 
      if(header && header.par1){
        const num = String(header.par1).padStart(2,'0');
        document.getElementById("num1").innerText = num[0];
        document.getElementById("num2").innerText = num[1];
      }
    });
}
</script>
 
 
<script>
function pad2(n){ return n.toString().padStart(2,'0'); }
 
document.addEventListener('DOMContentLoaded', () => {
  const mes = document.getElementById('filtro-mes');
  const ano = document.getElementById('filtro-ano');
  const cal = document.querySelector('.calendario-real tbody');
 
  function render(m,a){
    cal.innerHTML='';
 
    const f = new Date(a,m-1,1);
    const u = new Date(a,m,0);
    const i = f.getDay();
 
    let row = document.createElement('tr');
 
    for(let x=0;x<i;x++) row.appendChild(document.createElement('td'));
 
    const hoy = new Date();
    let activa=`${a}-${pad2(m)}-01`;
 
    for(let d=1; d<=u.getDate(); d++){
      const td=document.createElement('td');
      td.textContent=d;
 
      const fecha=`${a}-${pad2(m)}-${pad2(d)}`;
 
      if(d===hoy.getDate() && m===hoy.getMonth()+1 && a===hoy.getFullYear()){
        td.classList.add('activo');
        activa=fecha;
      }
 
      td.onclick=()=>{
        cal.querySelectorAll('.activo').forEach(e=>e.classList.remove('activo'));
        td.classList.add('activo');
        cargarResultadosDiariaSV(fecha);
      };
 
      row.appendChild(td);
 
      if((d+i)%7===0){
        cal.appendChild(row);
        row=document.createElement('tr');
      }
    }
 
    cal.appendChild(row);
 
    // carga inicial
    cargarResultadosDiariaSV(activa);
  }
 
  mes.onchange=()=>render(+mes.value,+ano.value);
  ano.onchange=()=>render(+mes.value,+ano.value);
 
  const h=new Date();
  mes.value=pad2(h.getMonth()+1);
  ano.value=h.getFullYear();
 
  render(h.getMonth()+1,h.getFullYear());
});
</script>
 
<script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "e25e83b5-ef96-41b9-b3d4-a949ffada641",
      host: "https://loteradehonduras-help.freshchat.com",
      widgetUuid: "7bb0713e-e6f3-41d8-945d-9c6d399b2166",
      locale: "es"
    });
  }
 
  function initialize(i, t) {
    var e;
    i.getElementById(t)
      ? initFreshChat()
      : (
          (e = i.createElement("script")),
          e.id = t,
          e.async = true,
          e.src = "https://loteradehonduras-help.freshchat.com/js/widget.js",
          e.onload = initFreshChat,
          i.head.appendChild(e)
        );
  }
 
  function initiateCall() {
    initialize(document, "Freshchat-js-sdk");
  }
 
  window.addEventListener
    ? window.addEventListener("load", initiateCall, false)
    : window.attachEvent("load", initiateCall, false);
</script>
 
 
 
</body>
</html>