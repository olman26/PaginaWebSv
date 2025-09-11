<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diaria Loto</title>

  <!-- Fuente Helvetica Rounded -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Helvetica+Rounded:wght@400;700;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Helvetica Rounded', Arial, sans-serif;
    }

    /* Div superior centrado */
    .top {
      background: #aeca36;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px 20px;
      color: #fff;
    }

    .top-content {
      display: flex;
      align-items: center;
      gap: 30px;
      margin-top: 20px;
    }

    .top img {
      width: 350px;
      height: auto;
      position: relative;
      left: -50px;
      top: 20px;
    }

    .ganador {
      font-weight: bold;
      font-size: 26px;
      width: 450px;
      text-align: center;
      margin-bottom: 17px;
      margin-top: 10px;
    }

    .ganador-box {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .nums {
      margin-bottom: 12px;
    }

    .num {
      display: inline-block;
      background: #438f4f;
      color: #fff;
      border-radius: 50%;
      padding: 12px 18px;
      margin: 0 5px;
      font-weight: bold;
      font-size: 21px;
    }

    .etiqueta-hola {
      background-color: #ffff00;
      color: #438f4f;
      padding: 6px 12px;
      border-radius: 12px;
      font-weight: bold;
      text-align: center;
      margin: 10px 0;
      display: inline-block;
      font-size: 20px;
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
      color: white;
      text-decoration: none;
      padding: 8px 15px;
      border-radius: 25px;
      font-weight: bold;
      font-size: 14px;
      transition: background 0.3s;
    }

    .menu a:hover {
      background: #367743;
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

    .resultados .col {
      flex: 1;
      text-align: center;
    }

    /* Izquierda */
    .resultados .izquierda h2 {
      font-size: 40px;
      font-weight: 600;
      color: #438f4f;
      margin-bottom: 10px;
      line-height: 1.2;
      text-align: center;
    }

    .resultados .izquierda .subtitulo {
      font-size: 40px;
      font-weight: 600;
      display: block;
      margin-top: 5px;
    }

    .label-fecha {
      background: yellow;
      color: green;
      font-weight: bold;
      padding: 6px 12px;
      border-radius: 15px;
      display: inline-block;
      font-size: 14px;
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
      font-size: 18px;
      color: green; /* horas en verde */
      margin-bottom: 8px;
      text-align: center;
    }

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

    /* Accordion principal */
    .accordion {
      border: 0px solid #438f4f;
      border-radius: 10px;
      margin: 20px 1cm;
      background: #438f4f;
      color: white;
      font-weight: bold;
    }

    .accordion-header {
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      padding: 20px 20px;
      font-size: 24px;
      font-weight: bold;
      position: relative;
    }

    .accordion-header .arrow {
      position: absolute;
      right: 20px;
      transition: transform 0.3s;
      font-size: 28px;
    }

    .accordion-content {
      display: none;
      padding: 15px 20px;
      background: #fafafaff;
      color: #000;
      font-weight: normal;
      font-size: 14px;
      border-top: 1px solid #080808ff;
    }

    /* Sub-acordeones */
    .sub-accordion {
      border: 1px solid #438f4f;
      border-radius: 10px;
      margin: 10px 0;
      background: #e6f5d6;
      color: #000;
    }

    .sub-accordion-header {
      padding: 10px 15px;
      cursor: pointer;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .sub-accordion-content {
      display: none;
      padding: 10px 15px;
      font-weight: normal;
      font-size: 14px;
      background: #fafafaff;
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
      border-radius: 25px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .reglamento button:hover {
      background: #e65c00;
    }
  </style>
</head>

<body>
  <!-- Bloque superior -->
  <div class="top">
    <div class="top-content">
      <img src="Diaria.webp" alt="Diaria Loto">
      <div class="ganador-box">
        <div class="ganador">ÚLTIMO NÚMERO GANADOR:</div>
        <div class="nums">
          <span class="num">0</span>
          <span class="num">9</span>
        </div>
        <div class="etiqueta-hola">PRÓXIMO SORTEO EN VIVO: 01/01 - 1:25</div>
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
    <div class="col izquierda">
      <h2>
        RESULTADOS <br>
        <span class="subtitulo">ANTERIORES</span>
      </h2>
      <label class="label-fecha">SELECCIONÁ LA FECHA:</label>
    </div>

    <div class="col centro">
      <div class="calendario">Aquí podría ir un calendario más grande o embebido</div>
    </div>

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
  </div>

  <!-- Accordion principal -->
  <div class="accordion">
    <div class="accordion-header" onclick="toggleAccordion(this)">
      <span style="font-weight:bold; font-size:24px;">CÓMO JUGAR Y GANAR</span>
      <span class="arrow">▼</span>
    </div>
    <div class="accordion-content">
      <div style="display:flex; align-items:flex-start; gap:20px; margin-bottom:15px;">
        <div style="flex:1;">
          <h3 style="color:#aeca36; margin-bottom:10px;">¿CÓMO SE JUEGA?</h3>
          <img src="Diaria.webp" alt="Diaria" style="width:80px; height:auto;">
        </div>
        <div style="flex:2;">
          <p>SELECCIONA 1 NÚMERO DE DOS DÍGITOS DEL 00 AL 99 Y SI TU NÚMERO ES FAVORITO, GANA 50 VECES TU INVERSIÓN.</p>
          <p>DISPONIBLES DESDE L.5.</p>

          <!-- Sub-acordeones -->
          <div class="sub-accordion">
            <div class="sub-accordion-header" onclick="toggleSubAccordion(this)">
              Reglas principales <span>▼</span>
            </div>
            <div class="sub-accordion-content">
              <p>Explicación detallada de las reglas principales del juego.</p>
            </div>
          </div>

          <div class="sub-accordion">
            <div class="sub-accordion-header" onclick="toggleSubAccordion(this)">
              Premios <span>▼</span>
            </div>
            <div class="sub-accordion-content">
              <p>Lista completa de premios y multiplicadores.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Botón reglamento -->
  <div class="reglamento">
    <button onclick="window.open('reglamento.pdf', '_blank')">LEER EL REGLAMENTO</button>
  </div>

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

    function toggleSubAccordion(header) {
      const content = header.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
        header.querySelector('span').textContent = "▼";
      } else {
        content.style.display = "block";
        header.querySelector('span').textContent = "▲";
      }
    }
  </script>
</body>
</html>
