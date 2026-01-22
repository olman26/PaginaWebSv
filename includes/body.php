<script>
fetch('/api/resultado-diaria.php')
  .then(response => response.json())
  .then(data => {
    if (!data.error) {
      document.getElementById('par1').innerText = data.digito1;
      document.getElementById('par2').innerText = data.digito2;
    } else {
      console.error('Error API:', data.error);
    }
  })
  .catch(error => {
    console.error('Error al cargar resultados:', error);
  });
</script>


<script>
async function cargarResultados() {
    try {
        // Cambia esta URL a la correcta que devuelve los últimos resultados
        const response = await fetch('https://wslotosalvador-d2hbanggbucganbt.canadacentral-01.azurewebsites.net/api/ultimo_resultado.php');
        if (!response.ok) throw new Error('Error en la respuesta de la API');
        const data = await response.json();

        console.log(data); // para ver que llega {"par1":"9","par2":"3",...}

        // Actualizamos los números en los spans correspondientes
        document.getElementById('num1').innerText = data.par1 || '0';
        document.getElementById('num2').innerText = data.par2 || '0';
        document.getElementById('num3').innerText = data.par3 || '0';
        document.getElementById('num4').innerText = data.par4 || '0';
        document.getElementById('num5').innerText = data.par5 || '0';
    } catch (error) {
        console.error('No se pudieron cargar los resultados:', error);
    }
}

// Llamamos a la función para cargar los resultados
cargarResultados();
</script>

<body> 

  <style>
@font-face {
  font-family: 'HelveticaRounded';
  src: url('/fonts/HelveticaRoundedLTStd-Bd.ttf') format('truetype');
  font-weight: bold;
  font-style: normal;
  font-display: swap;
}

    html, body {
  font-family: 'HelveticaRounded', Arial, sans-serif !important;
  overflow-x: hidden !important;
  width: 100%;
}


* {
  font-family: 'HelveticaRounded', Arial, sans-serif !important;
}



    /* FUENTE PARA TODA LA PÁGINA */
    body, h1, h2, h3, h4, h5, h6, p, button, a, span, div {
      font-family: "Helvetica Rounded", "Helvetica Rounded Black", Arial, sans-serif !important;
    }

    /* ANIMACIÓN SUAVE PARA EL SCROLL */
    .resultados-box {
      transition: margin-top 0.3s ease !important;
    }

    .horarios {
    font-size: 22px;
    font-weight: bold;
    color: #0070c0; /* COLOR QUE PEDISTE */
    line-height: 1.5;
  }

  .boton {
    display: inline-block;
    background: white;
    border: 2px solid #0070c0;   /* CONTORNO ELEGANTE */
    color: #0070c0;
    padding: 12px 28px;
    margin-top: 15px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 12px;         /* MODERNO */
    text-decoration: none;
    transition: 0.3s ease;
    box-shadow: 0px 4px 10px rgba(0, 112, 192, 0.25); /* SOMBRA PREMIUM */
  }

  .boton:hover {
    background: #0070c0;         /* AZUL AL PASAR */
    color: white;                /* TEXTO BLANCO */
    transform: translateY(-3px); /* EFECTO DE ELEVAR */
    box-shadow: 0px 8px 18px rgba(0, 112, 192, 0.40);
  }

  .resultados-header h2 {
    font-size: 34px;        /* Más grande */
    font-weight: 900;       /* Bold máximo */
    text-align: center;
    font-stretch: expanded;
    margin: 0;
  }

  .titulo-naranja {
    color: orange;
  }

  .titulo-azul {
    color: #0070c0;
  }

  /* Contenedor de resultados */
/* Contenedor de resultados */
.resultados-box {
  padding: 40px 20px;
  background-color: #f9f9f9;
  border-radius: 16px;
  box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
  max-width: 1200px;
  margin: 0 auto 50px auto;
  transition: margin-top 0.3s ease;
}

/* Título */
.resultados-header h2 {
  font-size: 40px;
  font-weight: 900;
  text-align: center;
  font-stretch: expanded;
  margin-bottom: 30px;
}

.titulo-naranja {
  color: orange;
}

.titulo-azul {
  color: #0070c0;
}

/* Carrusel */
.resultados-carousel {
  display: flex;
  overflow-x: auto;
  gap: 20px;
  padding-bottom: 10px;
}

.res-cards {
  display: flex;
  gap: 20px;
}

/* Tarjetas */
.res-card {
  background-color: white;
  border-radius: 16px;
  box-shadow: 0px 6px 15px rgba(0,0,0,0.15);
  flex: 0 0 250px;
  padding: 15px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
}

.res-card:hover {
  transform: translateY(-5px);
  box-shadow: 0px 12px 25px rgba(0,0,0,0.25);
}

/* Imagen dentro de la tarjeta */
.res-card img {
  width: 100%;
  border-radius: 12px;
  margin-bottom: 10px;
}

/* Números / esferas */
.numeros {
  display: flex;
  gap: 8px;
  margin-bottom: 15px;
  justify-content: center;
}

.bola-verde, .bola-amarilla {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 50%;
  font-weight: bold;
  color: white;
  font-size: 18px;
}

.bola-verde {
  background-color: #28a745;
}

.bola-amarilla {
  background-color: #ffc107;
  color: #000;
}

/* Mantener botones tal como los tenías antes */
.btn-container {
  display: flex;
  justify-content: center;
  gap: 10px;
}

/* Scroll horizontal */
.resultados-carousel::-webkit-scrollbar {
  height: 8px;
}

.resultados-carousel::-webkit-scrollbar-thumb {
  background: rgba(0,0,0,0.2);
  border-radius: 4px;
}

.resultados-carousel::-webkit-scrollbar-track {
  background: transparent;
}

/* Texto PRÓXIMO SORTEO */
.proximo {
  font-size: 26px;
  font-weight: 900;
  text-align: center;
  color: #003399;
  margin-top: 25px;
}

.youtube-video {
  flex: 1 1 500px;
  max-width: 700px;
  margin-left: -30px; /* Mueve solo el video 3 cm a la izquierda */
  margin-top: -80px;  /* Subir el video 2 cm más hacia arriba */
  border-radius: 15px; /* Redondea las esquinas del video */
}
.youtube-video iframe {
  width: 100%;
  height: 315px;
  border-radius: 15px; /* Redondea las esquinas del iframe */
}

.youtube-right {
  flex: 0 0 auto;
  min-width: 300px;
  max-width: 500px;
  
  display: flex;
  flex-direction: column;
  align-items: center; /* Centra todo el contenido dentro de este bloque */
}


.boton-container {
  display: flex;
  justify-content: center; /* centra horizontalmente el botón */
  width: 100%;             /* ocupa todo el ancho del contenedor */
  margin-top: 20px;        /* separación del texto */
}

.youtube-boton {
  padding: 12px 30px;
  border-radius: 30px;
  font-size: 18px;
  font-weight: bold;
  color: white; /* Texto blanco */
  background: orange; /* Fondo naranja */
  border: none;
  cursor: pointer;
  transition: transform 0.2s ease, background 0.3s ease;
}

.youtube-boton:hover {
  transform: scale(1.05);
  background: #e68928; /* Fondo naranja más oscuro cuando el botón es hover */
}


/* Texto semi-bold */
.youtube-info p {
  font-weight: 600;      /* semi-bold */
}




.hero,
.hero-carousel {
  overflow: hidden;
  max-width: 100vw;
}


.hero-slide {
  display: none;
  width: 100%;
}

.hero-slide.active {
  display: block;
}

.hero-banner {
  width: 100%;
  height: auto;
  display: block;
}





/* Responsive */
@media (max-width: 1024px) {
  .youtube-content {
    flex-direction: column;
    align-items: center;
  }
  .youtube-video, .youtube-right {
    margin-left: 0;
    transform: none;
  }
  .youtube-text h2 {
    font-size: 24px;
  }
  .youtube-info p {
    font-size: 15px;
  }
}
@media (max-width: 768px) {
  .banner-container, .banner-superpremio, .banner-principal {
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
  }
}

/* ===== FIX RSE SOLO MOBILE ===== */
@media (max-width: 768px) {

  /* Apilamos todo vertical */
  .rse-content {
    display: block !important; /* cambiamos a block para móvil */
    text-align: center;        /* centra todo horizontalmente */
  }

  .rse-text {
    display: block !important;
    width: 100% !important;
    text-align: center !important;
  }

  .rse-image {
    display: block !important;
    width: 100% !important;
    text-align: center !important;
    margin: 0 auto !important;
    padding: 0 !important;
  }

  .rse-image img {
    display: inline-block !important;
    margin: 0 auto !important;
    max-width: 90% !important;
    height: auto !important;
  }

  .rse .boton-container {
    display: flex !important;
    justify-content: center !important;
  }

  .rse-text p {
    margin-left: 0 !important;
    text-align: center !important;
  }
}
@media (max-width: 768px) {
  .rse-image img {
    position: relative;
    left: -10px;  /* mueve un poco a la izquierda */
    top: 10px;    /* baja un poquito */
  }
}

/* ===== HERO RESPONSIVE MOVIL COMO PC ===== */
@media (max-width: 768px) {

  /* Baja todo el carousel para que el header no lo tape */
  .hero-carousel {
    margin-top: 285px !important;
  }

  .hero {
    display: flex !important;
    flex-direction: row !important; /* texto izquierda, modelo derecha */
    justify-content: space-between;
    align-items: center;
    position: relative !important;
    width: 95%;
    max-width: 100%;
    margin: 0 auto;
    flex-wrap: wrap; /* permite que no se salga en pantallas muy chicas */
  }

  /* Texto a la izquierda */
  .texto-hero {
    flex: 1 1 40%;
    text-align: left !important;
    margin-left: 10px;
  }

  .texto-hero h1 {
    font-size: 1.2rem !important;
    line-height: 1.3 !important;
  }

  .texto-hero .horarios {
    font-size: 1rem !important;
    margin: 5px 0 10px 0 !important;
  }

  .texto-hero .boton {
    font-size: 0.9rem !important;
    padding: 8px 18px !important;
  }

  /* Modelo a la derecha */
  .hero img:not(.esfera) {
    flex: 1 1 55%;
    max-width: 100%;
    height: auto;
    display: block !important;
    margin: 0 auto;
    position: relative;
  }

  /* Esferas: redimensionar y reposicionar proporcionalmente */
  .esfera {
    width: 35px !important;
    height: 35px !important;
    line-height: 35px !important;
    font-size: 14px !important;
    position: absolute !important;
  }

  /* Ajustar posiciones de cada esfera */
  .esfera:nth-of-type(1) { top: 10% !important; left: 60% !important; }
  .esfera:nth-of-type(2) { top: 65% !important; left: 55% !important; }
  .esfera:nth-of-type(3) { top: 45% !important; left: 88% !important; }
}


@media (max-width: 768px) {

  /* Evitar que la imagen se estire */
  .hero img:not(.esfera) {
    flex: 1 1 55%;
    max-width: 100%;
    height: auto !important; /* asegura proporciones correctas */
    object-fit: contain; /* mantiene proporción */
    display: block !important;
    margin: 0 auto;
    position: relative;
  }

  /* Bola roja al lado izquierdo de la modelo */
  /* Ajusta según tu HTML: si la bola roja es la primera .esfera, se coloca aquí */
  .esfera:nth-of-type(1) { top: 40% !important; left: 42% !important; } /* bola roja */
  .esfera:nth-of-type(2) { top: 10% !important; left: 60% !important; }
  .esfera:nth-of-type(3) { top: 65% !important; left: 55% !important; }
  .esfera:nth-of-type(4) { top: 45% !important; left: 88% !important; }
}





/* ===== RESPONSIVE MÓVIL SOLO RESULTADOS-BOX ===== */
@media (max-width: 764px) {

  /* Ajuste del contenedor principal */
  .resultados-box {
    padding: 20px 10px;
    max-width: 95%;
  }

  /* Título centrado y más pequeño */
  .resultados-header h2 {
    font-size: 24px !important;
    line-height: 1.2;
    text-align: center;
  }

  #fecha-api {
    font-size: 20px !important;
  }

  /* Carrusel apilado verticalmente */
  .resultados-carousel {
    flex-direction: column !important;
    gap: 15px !important;
  }

  .res-cards {
    flex-direction: column !important;
    gap: 15px !important;
  }

  /* Tarjetas más anchas y centradas */
  .res-card {
    width: 90% !important;
    max-width: 90% !important;
    margin: 0 auto !important;
  }

  /* Imagen dentro de tarjeta */
  .res-card img {
    width: 70% !important;
    height: auto !important;
    margin: 0 auto !important;
    display: block !important;
  }

  /* Números centrados y más pequeños */
  .numeros {
    justify-content: center !important;
    gap: 5px !important;
  }

  .bola-verde, .bola-amarilla {
    width: 35px !important;
    height: 35px !important;
    line-height: 35px !important;
    font-size: 16px !important;
  }

  /* Botones apilados y centrados */
  .btn-container {
    flex-direction: column !important;
    gap: 8px !important;
  }

  .btn-jugar, .btn-info {
    font-size: 14px !important;
    padding: 8px 12px !important;
  }

  /* Próximo sorteo más pequeño */
  .proximo {
    font-size: 20px !important;
  }

  #diaSorteo {
    font-size: 14px !important;
  }
}
@media (max-width: 768px) {
  /* Hacer tarjetas un poco más altas para que quepa el botón */
  .res-card {
    min-height: 320px !important; /* ajusta este valor según necesites */
  }
}

@media (max-width: 768px) {
  /* Asegurar que las tarjetas se expandan según su contenido */
  .res-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* fuerza que el contenido y los botones queden dentro */
    min-height: auto; /* elimina la altura fija si existía */
    padding-bottom: 20px; /* espacio extra para los botones */
  }

  /* Mantener los botones centrados y del mismo tamaño */
  .res-card .btn-container {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-shrink: 0; /* evitar que se compriman */
  }

  .res-card .btn-container button {
    width: 120px; /* mismo ancho para ambos botones */
    padding: 10px 0; /* altura uniforme */
    font-size: 16px;
  }
}

@media (max-width: 768px) {

  /* HACER LAS TARJETAS MÁS ALTAS */
  .res-card {
    min-height: 420px !important; /* 👈 AJUSTÁ ESTE NÚMERO SI QUERÉS MÁS ALTO */
  }

  /* FORZAR BOTONES DENTRO DE LA TARJETA */
  .btn-container {
    margin-top: auto; /* 👈 ESTO ES LA CLAVE */
  }

  /* BOTONES MISMO TAMAÑO */
  .btn-jugar,
  .btn-info {
    width: 100%;
    max-width: 180px;
  }
}

@media (max-width: 768px) {

  /* BOTONES A LA PAR */
  .res-card .btn-container {
    flex-direction: row !important;
    justify-content: center !important;
    align-items: center;
    gap: 10px;
  }

  /* MISMO TAMAÑO */
  .res-card .btn-jugar,
  .res-card .btn-info {
    width: 140px;
    padding: 10px 0;
  }
}





  </style>

  <div></div>

  <div class="hero-carousel">

  <div class="hero-slide active">
    <!-- HERO ORIGINAL (NO SE TOCA) -->
    <div class="hero" style="position: relative;">
      <div class="texto-hero">
        <h1>SINTONIZÁ EL PRÓXIMO SORTEO EN VIVO A LAS</h1>
        <div class="horarios">11:00 AM Y 9:00 PM</div>

        <a href="https://www.youtube.com/@LotoESElSalvador" class="boton">
          MÍRALO AQUÍ >
        </a>
      </div>

      <img src="/ImagesSV/modelo.png" alt="Conductora" style="display:block; max-width:100%; height:auto;">

      <img src="/ImagesSV/Esfera_3.png" class="esfera" style="position:absolute; width:5vw; top:20%; left:65%;">
      <img src="/ImagesSV/Esfera_9.png" class="esfera" style="position:absolute; width:5vw; top:70%; left:59%;">
      <img src="/ImagesSV/Esfera _11.png" class="esfera" style="position:absolute; width:5vw; top:50%; left:94%;">
    </div>
  </div>

  <!-- SLIDE DIARIA -->
  <div class="hero-slide">
  <a href="https://juega.loto.sv/lottery/#void" target="_blank">
    <img src="/ImagesSV/Cambio 1 - BANNERS NUEVA WEB-03 (1).jpg" class="hero-banner" alt="Banner">
  </a>
</div>


  <!-- SLIDE SIETES -->
  <div class="hero-slide">
  <a href="https://wslotosalvador-d2hbanggbucganbt.canadacentral-01.azurewebsites.net/index.php?pag=instacash" target="_blank">
    <img src="/ImagesSV/Cambio 1 - BANNERS NUEVA WEB-04 (1).jpg" class="hero-banner" alt="Banner Instacash">
  </a>
</div>


</div>


  <?php
$CHANNEL_ID = "UCm2CdYYApcaticw4xAMTHcw";
$rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id=$CHANNEL_ID";

$videoDate = "Cargando...";

$rss = simplexml_load_file($rss_url);

if ($rss && isset($rss->entry[0])) {
    $videoTitle = (string)$rss->entry[0]->title;

    // Buscar un patrón de fecha en el título (ejemplo: 29 de Diciembre 2025, 11:00 A.M.)
    if (preg_match('/\d{1,2}\s*de\s*\w+\s*\d{4},?\s*\d{1,2}:\d{2}\s*(?:A\.M\.|P\.M\.|AM|PM)/i', $videoTitle, $matches)) {
        $videoDate = $matches[0]; // Extrae solo: 29 de Diciembre 2025, 11:00 A.M.
    } else {
        $videoDate = "Fecha no disponible";
    }
}
?>
  <div class="resultados-box">
  <!-- Título -->
  <div class="resultados-header">
    <h2>
      <span class="titulo-naranja">ÚLTIMOS RESULTADOS,</span>
      <span class="titulo-azul" id="fecha-api" style="font-size: 40px; color: #fff; font-family: Nunito; font-weight:795;">
  <?php echo $videoDate; ?>
</span>
    </h2>
    <br>
    <!-- Carrusel -->
  <div class="resultados-carousel">
    <div class="res-cards">
      <!-- Diaria -->
      <div class="res-card verde">
        <img src="/ImagesSV/LOGO DIARIA.svg" 
     alt="Diaria" 
     style="width:190px; height:auto; position: relative; top:20px;">


        <div class="numeros" style="position:relative; top:15px;">
    <span class="bola-verde" id="par1">0</span>
    <span class="bola-verde" id="par2">0</span>
</div>


<script>
async function cargarResultados() {
    try {
        const response = await fetch('https://tusitio.com/resultados-diaria.php');
        if (!response.ok) throw new Error('Error en la respuesta de la API');
        const data = await response.json();

        console.log(data); // para ver que llega {"par1":"9","par2":"3",...}

        document.getElementById('par1').innerText = data.par1 || '0';
        document.getElementById('par2').innerText = data.par2 || '0';
    } catch (error) {
        console.error('No se pudieron cargar los resultados:', error);
    }
}

cargarResultados();
</script>

        <div class="btn-container">
          <button class="btn-jugar" onclick="window.location.href='https://juega.loto.sv/lottery/#void'">Jugá aquí </button>

          <a href="index.php?pag=diaria">
          <button class="btn-info">Conocé más</button>
          </a>

        </div>
      </div>

      <!-- Súper Premio (Rojo) -->
      <div class="res-card roja">
        <img src="/ImagesSV/SP.svg" alt="Super Premio" style="width: 90%; height: auto;">

       <!-- Este es el div donde se mostrarán los números -->
<div class="numeros">
    <span class="bola-amarilla" id="num1">00</span>
    <span class="bola-amarilla" id="num2">00</span>
    <span class="bola-amarilla" id="num3">00</span>
    <span class="bola-amarilla" id="num4">00</span>
    <span class="bola-amarilla" id="num5">00</span>
</div>
        <div class="btn-container">
          <button class="btn-jugar" onclick="window.location.href='https://juega.loto.sv/lottery/#void'">Jugá aquí </button>
          <a href="index.php?pag=super_premio">
            <button class="btn-info">Conocé más</button>
          </a>

        </div>
      </div>
    </div>
  </div>
<br>
<br>
 <p class="proximo" style="font-size: 28px; font-weight: 900; text-align: center; font-stretch: expanded;">
  <span style="color: #003399;">PRÓXIMO SORTEO EN VIVO:</span> 
  <span style="color: white;">
    <span id="hours">0</span>H :
    <span id="minutes">0</span>M :
    <span id="seconds">0</span>S
  </span>
</p>

<!-- Opcional: mostrar fecha -->
<div id="diaSorteo" style="color: white; font-size: 16px; text-align: center; margin-top: 10px;"></div>


</div>
  </div>
  <br>


<br>
<br>
<br>
<br>


<!-- BANNER ARRIBA DEL VIDEO -->
<!-- BANNER ARRIBA DEL VIDEO -->
<!-- BANNER CON NÚMERO ENCIMA -->
<!-- BANNER CON NÚMERO ENCIMA -->
<div style="width: 100%; text-align: center; position: relative; margin-bottom: 20px; top: -67px;">

    <!-- NÚMERO SUPERIOR -->
    <!-- NÚMERO SUPERIOR -->
<!-- NÚMERO SOBRE EL BANNER -->
<!-- CONTENEDOR DEL BANNER -->
<div class="banner-container" style="position: relative; display: block; text-align: center; margin-top: -20px; width: 100%; max-width: 1700px; margin: 0 auto;">
  <img src="/ImagesSV/Banner Sp.png" 
       alt="Banner Jackpots" 
       style="width: 100%; max-width: 100%; height: auto; border-radius: 16px; display: block; margin: 0 auto;">
  <div id="jackpot-num-banner" style="
      position: absolute;
      top: 47%;
      left: 65%; /* Cambiar 50% a 60% o más para mover el número a la derecha */
      transform: translateY(-50%); /* Mantenerlo centrado verticalmente */
      font-size: 62px;  
      font-weight: 900;
      color: #fafaf9ff;
      text-shadow: 3px 3px 8px rgba(0,0,0,0.5);
      z-index: 10;">
      $ 0
  </div>
</div>



</div>


</div>

<script>
async function cargarJackpot() {
    try {
        const response = await fetch('/api/jackpot_superpremio.php'); // ruta correcta
        if (!response.ok) throw new Error('Error en la API');

        const data = await response.json();
        console.log("Jackpot API:", data); // Para depurar

        const monto = data.jackpot != null ? Number(data.jackpot) : 0;
        // Formateamos con coma para miles
        document.getElementById('jackpot-num-banner').innerText = "$" + 
            monto.toLocaleString("es-ES").replace(/\./g, ",");
    } catch (error) {
        console.error("No se pudo cargar el Jackpot:", error);
    }
}

// Llamamos a la función
cargarJackpot();
</script>















 
  <?php
$CHANNEL_ID = "UCm2CdYYApcaticw4xAMTHcw"; // ID de tu canal
$rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id=$CHANNEL_ID";

// Cargar el RSS
$rss = simplexml_load_file($rss_url);

// Datos por defecto
$videoId = "1qsx5zpIp7w";
$videoTitle = "Sorteo LOTO 11:00 a.m 25 de Julio del 2025";
$videoDate = date('j \d\e F \d\e Y');

if ($rss && isset($rss->entry[0])) {
    $videoId = (string)$rss->entry[0]->children('yt', true)->videoId;
    $videoTitle = (string)$rss->entry[0]->title;
    $videoDate = date('j \d\e F \d\e Y', strtotime($rss->entry[0]->published));
}
?>

<!-- SECCIÓN YOUTUBE -->
<?php
$CHANNEL_ID = "UCm2CdYYApcaticw4xAMTHcw"; // ID de tu canal
$rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id=$CHANNEL_ID";

// Cargar el RSS
$rss = simplexml_load_file($rss_url);

// Datos por defecto
$videoId = "1qsx5zpIp7w";
$videoTitle = "Sorteo LOTO 11:00 a.m 25 de Julio del 2025";

if ($rss && isset($rss->entry[0])) {
    $videoId = (string)$rss->entry[0]->children('yt', true)->videoId;
    $videoTitle = (string)$rss->entry[0]->title;
}
?>

<!-- SECCIÓN YOUTUBE -->
<div class="youtube">
  <div class="youtube-inner">
    <div class="youtube-content">

      <!-- Video -->
      <div class="youtube-video">
        <iframe width="100%" height="315"
          src="https://www.youtube.com/embed/<?php echo $videoId; ?>"
          title="YouTube video player"
          frameborder="0"
          allowfullscreen>
        </iframe>

        <!-- SOLO EL TÍTULO, SIN FECHA -->
        <p class="video-subtext"><?php echo $videoTitle; ?></p>
      </div>

      <!-- Texto a la derecha -->
      <div class="youtube-right">
        <div class="youtube-text-wrapper">

          <div class="youtube-text">
            <h2>
              VISUALIZÁ NUESTROS<br>
              SORTEOS EN YOUTUBE<br>
              LOS 365 DÍAS DEL AÑO
            </h2>
          </div>

          <div class="youtube-info">
            <p>Sintonizá  en vivo los sorteos de las 11:00 a.m. y 9:00 p.m. por canal 4.</p>
            <p>Podrás disfrutar del sorteo por Facebook y Youtube Live</p>
          </div>

          <div class="boton-container">
            <a href="https://www.youtube.com/channel/UCm2CdYYApcaticw4xAMTHcw" target="_blank">
              <button class="youtube-boton">Ver más sorteos</button>
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>



  <!-- Espacio en blanco -->
  <div style="height: 50px;"></div>

 <!-- Banner Superpremio -->
<a href="https://juega.loto.sv/" target="_blank">
  <div class="banner-superpremio" style="width: 100%; max-width: 1700px; margin: 0 auto;">
    <img src="/ImagesSV/Banner Sp.gif" alt="Banner Superpremio" style="width: 100%; height: auto; border-radius: 16px; display: block; margin: 0 auto;">
  </div>
</a>


<!-- Banner Apostemos ancho completo igual que Superpremio -->
<!-- Banner Apostemos más largo pero NO a todo el ancho -->
<!-- Banner Apostemos ancho completo igual que Superpremio -->
<a href="https://juega.loto.sv/fob/" target="_blank">
  <div style="width: 100%; max-width: 1700px; text-align: center; margin: 80px auto 20px auto; cursor: pointer;">
    <img 
      src="/ImagesSV/banner principal.jpg" 
      alt="Banner Superpremio" 
      style="width: 100%; max-width: 100%; height: auto; border-radius: 16px; display: inline-block;"
    >
  </div>
</a>





<!-- Espacio en blanco -->
  <div style="height: 50px;"></div>


  <!-- Noticias Relevantes -->
<div class="noticias-box">
  <!-- Columna izquierda -->
  <div class="noticias-left">
    <h3>Noticias relevantes</h3>
    <button class="noticias-boton" onclick="window.location.href='index.php?pag=noticias';">Ver más noticias</button>


  </div>

  <!-- Carrusel a la derecha -->
  <div class="noticias-right">
    <div class="carousel">
      <div class="card">
        <img src="/ImagesSV/apostemossv.jpeg" alt="Noticia 1">
        <div class="card-content">
          <h4>Apostemos se prepara para un 2026 lleno de sorpresas</h4>
          <p>El 2026 será un año histórico para los fanáticos del deporte.</p>
        </div>
      </div>
      <div class="card">
        <img src="/ImagesSV/Lluvia de Aguinaldos - Ganadores.jpg" alt="Noticia 2">
        <div class="card-content">
          <h4>Lluvia de Aguinaldos</h4>
          <p>¡El Salvador celebró ganadores y premios diarios! Más de $55,000 en premios repartidos entre más de 55 afortunados salvadoreños </p>
        </div>
      </div>
      <div class="card">
        <img src="/ImagesSV/noticia.png" alt="Noticia 3">
        <div class="card-content">
          <h4>Más de 1.8 millones</h4>
          <p>Desde el día uno, nuestra promesa y compromiso fue cambiar vidas en El Salvador y esto se ha logrado a través de cada uno de los salvadoreños.</p>
        </div>
      </div>
      <!-- Nueva noticia -->
      <div class="card">
        <img src="/ImagesSV/TIFFANY FONDO-02.png" alt="Noticia 4">
        <div class="card-content">
          <h4>Crecemos Contigo Desde el Primer Día</h4>
          <p>Desde el inicio de nuestras operaciones en El Salvador, en Loto hemos avanzado de la mano de nuestro equipo. </p>
        </div>
      </div>
    </div>

    <!-- Flechas -->
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
  </div>
</div>

<script>
const carousel = document.querySelector('.carousel');
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');

let index = 0;

function moveCarousel() {
  const cardWidth = document.querySelector('.card').offsetWidth + 20;
  carousel.style.transform = `translateX(${-index * cardWidth}px)`;
}

next.addEventListener('click', () => {
  if (index < carousel.children.length - 3) {
    index++;
    moveCarousel();
  }
});

prev.addEventListener('click', () => {
  if (index > 0) {
    index--;
    moveCarousel();
  }
});
</script>




  <!-- Espacio en blanco -->
  <div style="height: 50px;"></div>

  <div class="rse">
    <div class="rse-content">
      <!-- Texto y número con borde naranja -->
      <div class="rse-text">
        <h2 class="numero" id="contador">0</h2>
        <p style="font-size:30px; font-weight:600; margin-left:25px;">
  DESDE 2023 HASTA 2025
</p>



      </div>

      <!-- Imagen a la derecha -->
      <div class="rse-image">
        <img src="/ImagesSV/IMG_3933_00013.png" alt="Imagen RSE">
      </div>
    </div>

    <!-- Botón centrado debajo -->
    <!-- Botón centrado debajo -->
<div class="boton-container">
  <a href="index.php?pag=sobre_nosotros" class="rse-boton" style="text-decoration: none;">
  Conocé más
</a>

</div>

  </div>

  <script>
    // Función animar número con + y coma como separador de miles
    function animarContador(idElemento, valorFinal, duracion) {
      const elemento = document.getElementById(idElemento);
      let valorInicial = 0;
      const incremento = Math.ceil(valorFinal / (duracion / 30)); // Ajusta la velocidad
      const intervalo = setInterval(() => {
        valorInicial += incremento;
        if (valorInicial >= valorFinal) {
          valorInicial = valorFinal;
          clearInterval(intervalo);
        }
        // Formatear con separador de miles (coma) y agregar + al inicio
        elemento.textContent = "$" + valorInicial
  .toLocaleString("es-ES")
  .replace(/\./g, ",");

      }, 30);
    }

    // Llamada a la función
    animarContador("contador", 1825300, 2000); // (id, número final, duración en ms)

  </script>

  <!-- SCRIPT SCROLL SUAVE (REEMPLAZA TRANSFORM POR MARGIN-TOP) -->
  <script>
    window.addEventListener('scroll', function() {
      const box = document.querySelector('.resultados-box');

      if (window.scrollY > 0) {
        box.style.marginTop = "-40px";
      } else {
        box.style.marginTop = "0";
      }
    });
  </script>


<script>
var diasSemana = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
var mesesEnletras = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

var hoy = new Date();
var dia = hoy.getDate();
var hora = hoy.getHours();
var HoraSorteo = "";

// Hora próximo Sorteo en SV
if(hora < 11){
    HoraSorteo = "11";
} else if(hora >= 11 && hora < 21){
    HoraSorteo = "21";
} else if(hora >= 21){
    HoraSorteo = "11";
    dia += 1;
}

Number.prototype.padStart = function (n,str){
    return Array(n-String(this).length+1).join(str||'0')+this;
}

var fechaCompleta = diasSemana[hoy.getDay()] + " " + hoy.getDate() + " de " + mesesEnletras[hoy.getMonth()];

let countDown = new Date(hoy.getFullYear(), hoy.getMonth(), dia, HoraSorteo).getTime();

let x = setInterval(function() {
    let now = new Date().getTime();
    let distance = countDown - now;

    document.getElementById('hours').innerText = Math.floor((distance % day) / hour).padStart(2, "0");
    document.getElementById('minutes').innerText = Math.floor((distance % hour) / minute).padStart(2, "0");
    document.getElementById('seconds').innerText = Math.floor((distance % minute) / second).padStart(2, "0");

    document.getElementById('diaSorteo').innerText = fechaCompleta;

    if(distance <= 0){
        clearInterval(x);
        document.getElementById('countdown-container').innerText = "¡Sorteo en vivo!";
    }
}, second);
</script>





<script>
let heroIndex = 0;
const heroSlides = document.querySelectorAll('.hero-slide');

function showHeroSlide(index) {
  heroSlides.forEach(slide => slide.classList.remove('active'));
  heroSlides[index].classList.add('active');
}

setInterval(() => {
  heroIndex = (heroIndex + 1) % heroSlides.length;
  showHeroSlide(heroIndex);
}, 10000);
</script>




</body>
