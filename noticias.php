<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Noticias</title>

<style>
@font-face {
  font-family: 'HelveticaRounded';
  src: url('fonts/HelveticaRoundedLTStd-Bd.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}


*{
  font-family:'HelveticaRounded',sans-serif;
  margin:0;
  padding:0;
  box-sizing:border-box;
}

body{
  font-family:'HelveticaRounded', sans-serif;
}


/* ================= CONTENEDOR ================= */
.container-general{
  width:90%;
  max-width:1200px;
  margin:auto;
}

/* ================= TITULO ================= */
/* TITULO NOTICIAS */
.titulo-noticias{
  background:#a6d1f8;
  padding:80px 40px 45px;   /* superior, lateral, inferior */
  border-radius:0 0 14px 14px;
  text-align:center;
  margin:0 -2cm 70px;      /* margen negativo lateral */
}

.titulo-noticias h1{
  color:#fff;
  font-size:45px;
  font-weight:900;
  letter-spacing:2px;
}

/* ===== RESPONSIVE ===== */
@media (max-width:768px){
  .titulo-noticias{
    padding:60px 20px 35px;  /* menos padding para móviles */
    margin:0 -10px 50px;     /* ajustar margen lateral negativo */
  }

  .titulo-noticias h1{
    font-size:28px;          /* título más pequeño en móvil */
  }
}

@media (max-width:480px){
  .titulo-noticias{
    padding:50px 15px 30px;  /* aún más compacto en pantallas muy pequeñas */
    margin:0 -5px 40px;
  }

  .titulo-noticias h1{
    font-size:24px;          /* tamaño legible en móviles pequeños */
  }
}


/* ================= NOTICIA PRINCIPAL ================= */
/* ================= NOTICIA PRINCIPAL ================= */
.noticia-principal-container{
  display: inline-block; /* permite que el contenido absoluto funcione */
  gap: 30px; /* espacio entre imagen y texto */
  align-items: flex-start;
  margin-bottom:90px;
  flex-wrap: wrap; /* para que en móvil se acomode vertical */
  position: relative; /* Contenedor padre relativo */
  
}

.noticia-principal-container img{
  width: 55%; /* ahora más pequeña y menos ancha */
  height: auto;
  object-fit: cover; /* recorta pero mantiene proporción */
  border-radius:16px;
  display: block;
}

.noticia-principal-contenido {
  position: absolute; /* lo ponemos encima de la imagen */
  bottom: 20px;       /* distancia desde abajo */
  left: 500px;         /* distancia desde la izquierda */
  background: rgba(255, 255, 255, 0.9); /* semitransparente para ver la foto detrás */
  padding: 40px 28px; /* ↑↓ más alto */
  border-radius: 16px;
  max-width: 60%;     /* ajusta el tamaño del rectángulo */
  z-index: 10;        /* se asegura que quede encima de la imagen */
  box-shadow: 0 6px 18px rgba(0,0,0,0.2);
  min-height: 400px;   /* ← esto lo hace más alto sí o sí */
}

.noticia-principal-contenido .fecha{
  font-size:17px;
  font-weight:700;
  color:#444;
}

.noticia-principal-contenido h2{
  color:#ff6600;
  font-size:32px;
  margin:12px 0;
  font-weight:900;
}

.noticia-principal-contenido p{
  font-size:15px;
  line-height:1.6;
  color:#444;
}

/* BOTÓN AZUL ORIGINAL */
.btn-leer{
  display:inline-block;
  margin-top:10px;
  padding:6px 14px;
  font-size:13px;
  font-weight:700;

  background:#1a73e8;
  color:#fff;
  border-radius:18px;
  text-decoration:none;
  transition:background .2s ease;
}

.btn-leer:hover{
  background:#1558b0;
}

/* ================= GRID ================= */
.grid-noticias-wrapper{
  background:#fff;
  padding:30px 20px;
  border-radius:16px;
  box-shadow:0 6px 18px rgba(0,0,0,0.12);
}

.grid-noticias{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:20px;
  transform:translateY(-70px);
}

/* ================= CARD ================= */
.card-noticia{
  background:#fff;
  border-radius:12px;
  overflow:hidden;
  box-shadow:0 4px 12px rgba(0,0,0,0.1);
  display:flex;
  flex-direction:column;
  transition: transform .25s ease, box-shadow .25s ease;
}
.card-noticia:hover{
  transform: translateY(-6px);
  box-shadow: 0 12px 28px rgba(0,0,0,0.18);
}

.card-noticia img{
  width: 100%;
  height: 220px;
  object-fit: cover;
  object-position: center;
  border-radius: 12px;

  image-rendering: auto;
  backface-visibility: hidden;
  transform: translateZ(0);
}



.card-noticia .fecha{
  font-size:12px;
  color:#777;
  padding:8px 12px 0;
}

.card-noticia h3{
  font-size:15px;
  color:#ff6600;
  margin:4px 12px;
  font-weight:700;
  line-height:1.4;
}

/* TEXTO 2 LÍNEAS */
.card-noticia .contenido{
  font-size:13px;
  color:#444;
  margin:0 12px;

  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;   /* SOLO 2 LÍNEAS */
  overflow: hidden;

  line-height: 1.5;
  max-height: calc(1.5em * 2); /* respaldo */
  transition: max-height .3s ease;
}

.card-noticia .contenido.expandido{
  -webkit-line-clamp: unset;
  max-height: 1000px; /* suficiente para todo el texto */
}



.card-noticia .btn-leer{
  align-self: flex-start;     /* evita que se estire */
  margin: 16px 12px 14px;     /* separa del texto */
  padding: 5px 12px;          /* botón más corto */
  font-size: 12px;            /* más discreto */
  border-radius: 14px;
  transition: all .2s ease;
}

.card-noticia .btn-leer:hover{
  background:#1558b0;
  transform: translateX(3px);
}



/* ================= RESPONSIVE ================= */
@media(max-width:1024px){
  .grid-noticias{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .grid-noticias{
    grid-template-columns:1fr;
  }

  .noticia-principal-contenido{
    margin:-40px 10px 0;
  }
}

@media(max-width:768px){
  .noticia-principal-container img{
    width: 100%;
  }

  .noticia-principal-contenido{
    position: static;
    margin-top: -50px;
    max-width: 100%;
    min-height: auto;
  }
}


/* Solo para celulares: bajar el container azul */
@media (max-width: 767px) {
  .titulo-noticias {
    margin-top: 270px; /* Ajusta este valor para que quede visualmente bien */
  }
}


</style>
</head>

<body>

<div class="container-general">

<section class="titulo-noticias">
  <h1>NOTICIAS RECIENTES</h1>
</section>

<section class="noticia-principal-container">
  <img src="/ImagesSV/apostemossv.jpeg" alt="">
  <div class="noticia-principal-contenido">
    <p class="fecha">OCT 10, 2025</p>
    <h2>Apostemos se prepara para un 2026 lleno de sorpresas</h2>
    <p>EL 2026 SERÁ UN AÑO HISTÓRICO PARA LOS FANÁTICOS DEL DEPORTE, Y EN APOSTEMOS ESTAMOS LISTOS PARA VIVIRLO A LO GRANDE. CON LA LLEGADA DEL MUNDIAL, NUESTRA PLATAFORMA SE PREPARA 
      PARA OFRECER NUEVAS EXPERIENCIAS, PROMOCIONES ESPECIALES Y DINÁMICAS EXCLUSIVAS PENSADAS PARA QUE CADA PARTIDO SE DISFRUTE AL MÁXIMO.</p>
  </div>
</section>

<section class="grid-noticias-wrapper">
<div class="grid-noticias">

<!-- 1 -->
<article class="card-noticia">
<img src="ImagesSV/tiendas-pronto.png">
<p class="fecha">ENE 20, 2026</p>
<h3>UNO Pronto y Loto El Salvador Fortalecen su Alianza</h3>
<p class="contenido">La alianza estratégica entre UNO Pronto y Loto El Salvador continúa creciendo con la apertura de 12 nuevos Puntos de Venta, alcanzando un total de 25
   establecimientos a nivel nacional. Esta expansión refuerza el compromiso de ambas marcas por acercar sus servicios a más salvadoreños y ofrecer una experiencia más completa 
   y accesible.</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

<!-- 2 -->
<article class="card-noticia">
<img src="ImagesSV/TIFFANY FONDO-02.png">
<p class="fecha">ENE 15, 2025</p>
<h3>Crecemos Contigo Desde el Primer Día</h3>
<p class="contenido">Desde el inicio de nuestras operaciones en El Salvador, en Loto hemos avanzado de la mano de nuestro equipo,
   impulsando el talento interno y creando oportunidades reales de desarrollo profesional. Nuestro crecimiento ha sido posible gracias 
   a las personas que forman parte de nuestra organización, y por eso apostamos constantemente por su bienestar y evolución.</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

<!-- 3 -->
<article class="card-noticia">
<img src="ImagesSV/shared image (6).jpg">
<p class="fecha">DIC 15, 2025</p>
<h3>Loto Consolida la Red de Venta</h3>
<p class="contenido">Loto continúa fortaleciendo su presencia en El Salvador, consolidándose como la red de venta y pago de premios más amplia del territorio nacional. 
  Actualmente, la marca está disponible en 1,800 Puntos de Venta distribuidos estratégicamente a través de tiendas tradicionales, kioskos, farmacias, tiendas de conveniencia
   y vendedores ambulantes.</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

<!-- 4 -->
<article class="card-noticia">
<img src="ImagesSV/2 (2) (1).jpg">
<p class="fecha">ENE 5, 2025</p>
<h3>Apostemos iGaming</h3>
<p class="contenido">Apostemos iGaming es nuestra plataforma de entretenimiento digital que reúne una amplia variedad de juegos y experiencias interactivas,
   permitiendo a los usuarios disfrutar múltiples opciones desde un solo lugar. Diseñada para ofrecer diversión, accesibilidad y dinamismo, integra lo mejor
    del entretenimiento online en un entorno seguro, intuitivo y siempre disponible.</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

<!-- 5 -->
<article class="card-noticia">
<img src="ImagesSV/WhatsApp Image 2026-01-15 at 10.17.37 AM.jpeg">
<p class="fecha">DIC 5, 2025</p>
<h3>Loto Expande su Presencia</h3>
<p class="contenido">Loto continúa fortaleciendo su estrategia de cercanía y accesibilidad
   con la apertura de tres nuevos puntos de venta propios, ampliando su presencia en zonas 
   clave del país y facilitando el acceso de más jugadores a sus productos y servicios.</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

<!-- 6 -->
<article class="card-noticia">
<img src="ImagesSV/Lluvia de Aguinaldos - Ganadores.jpg">
<p class="fecha">ENE 5, 2026</p>
<h3>Lluvia de Aguinaldos</h3>
<p class="contenido">¿En qué consistió la promoción?
Para participar, solo había que jugar cualquiera de los juegos Diaria, Instacash, 
SuperPremio con una inversión mínima de $3. Cada jugada era una oportunidad para 
convertirse en uno de los ganadores diarios de $1,000.</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

<!-- 7 -->
<article class="card-noticia">
<img src="ImagesSV/noticia.png">
<p class="fecha">DIC 1, 2025</p>
<h3>1.8 millones entregados</h3>
<p class="contenido">Desde el día uno, nuestra promesa y compromiso fue cambiar vidas en El Salvador y 
esto se ha logrado a través de cada uno de los salvadoreños que confían en la variedad 
de los juegos que les presentamos para poder ganar y aportar su granito de arena a las 
comunidades más vulnerables de El Salvador</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

<!-- 8 -->
<article class="card-noticia">
<img src="ImagesSV/777ws.png">
<p class="fecha">ENE 19, 2026</p>
<h3>¡Llegó SIETES para ganar hasta $7,777 al instante!</h3>
<p class="contenido">¿Sos de los que le encanta la adrenalina de ganar al instante? SIETES, el nuevo juego 
de InstaCash se encuentra disponible en todos los puntos de venta para que vivas esa 
emoción</p>
<a href="#" class="btn-leer">Leer más</a>
</article>

</div>
</section>
<br>
<br>
</div>

<script>
document.querySelectorAll('.card-noticia .btn-leer').forEach(btn=>{
  btn.addEventListener('click',e=>{
    e.preventDefault();
    const card=btn.closest('.card-noticia');
    const texto=card.querySelector('.contenido');
    texto.classList.toggle('expandido');
    btn.textContent=texto.classList.contains('expandido')?'Leer menos':'Leer más';
  });
});
</script>

</body>
</html>
