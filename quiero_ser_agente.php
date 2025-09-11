<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiero ser agente</title>

 
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
    <!-- Columna izquierda -->
    <div class="col izquierda">
      <h2>
        RESULTADOS <br>
        <span class="subtitulo">ANTERIORES</span>
      </h2>
      <label class="label-fecha">
        SELECCIONÁ LA FECHA:
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
        </div>
      </div>

      <!-- Sub-accordions -->
      <div class="sub-accordion">
        <div class="sub-accordion-header" onclick="toggleAccordion(this)">
          <span>JUEGA EN 3 SORTEOS CONSECUTIVOS</span>
          <span class="arrow">▼</span>
        </div>
        <div class="sub-accordion-content">
          Información sobre cómo jugar en 3 sorteos consecutivos.
        </div>

        <div class="sub-accordion-header" onclick="toggleAccordion(this)">
          <span>CONOCE LOS RESULTADOS</span>
          <span class="arrow">▼</span>
        </div>
        <div class="sub-accordion-content">
          Información sobre cómo ver los resultados.
        </div>

        <div class="sub-accordion-header" onclick="toggleAccordion(this)">
          <span>RECLAMA TU PREMIO</span>
          <span class="arrow">▼</span>
        </div>
        <div class="sub-accordion-content">
          Información sobre cómo reclamar tu premio.
        </div>
      </div>
    </div>
  </div>

  

  <!-- Botón reglamento -->
  <div class="reglamento">
    <button onclick="window.open('reglamento.pdf', '_blank')">LEER EL REGLAMENTO</button>
  </div>

</body>

</html>
