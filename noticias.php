<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Noticias</title>
<style>
/* Contenedor general */
.container-general {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  font-family: Arial, sans-serif;
}

/* Rectángulo azul del título */

/* RECTÁNGULO AZUL */
/* RECTÁNGULO AZUL AJUSTADO */
/* RECTÁNGULO AZUL — 2 CM MÁS LARGO A CADA LADO */
.titulo-noticias {
  background: #a6d1f8;
  padding: 80px 40px 45px 40px; /* altura correcta */
  border-radius: 0 0 14px 14px;
  text-align: center;
  margin-bottom: 60px;

  margin-left: -2cm;   /* ← Se alarga hacia la izquierda */
  margin-right: -2cm;  /* ← Se alarga hacia la derecha */
}


/* TEXTO NOTICIAS RECIENTES */
.titulo-noticias h1 {
  color: #ffffff;
  font-size: 45px;
  font-weight: 900;
  margin-top: 25px; /* BAJADO */
  letter-spacing: 2px;
}


/* Contenedor horizontal noticia principal */
.noticia-principal-container {
  display: flex;
  gap: 20px;
  margin-bottom: 50px;
}

.noticia-principal-container img {
  width: 50%;
  object-fit: cover;
  border-radius: 12px;
}

/* CONTENEDOR PRINCIPAL */
.noticia-principal-contenido {
  width: 50%;
  background: #ffffff;
  padding:  30px 35px;   /* menos padding para compactar */
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start; /* contenido arriba */
  box-shadow: 0 6px 18px rgba(0,0,0,0.12);
  margin-top: 20px;   /* ← mueve el contenedor hacia abajo */
  margin-left: -2cm;  
  position: relative;
  z-index: 3;

  max-height: 335px;  /* altura máxima fija */
  overflow: hidden;   /* recorta el exceso si es necesario */
}


/* FECHA ARRIBA – MÁS GRANDE */
.noticia-principal-contenido .fecha {
  font-size: 17px;
  color: #444;
  margin-bottom: 12px;
  font-weight: 700;
  letter-spacing: 1px;
}


/* TITULO PRINCIPAL MÁS GRANDE */
.noticia-principal-contenido h2 {
  color: #ff6600;
  font-size: 32px;
  margin: 12px 0;
  font-weight: 900;
  text-transform: uppercase; /* opcional si lo querés así */
  line-height: 1.2;
}

/* DESCRIPCIÓN: MAYÚSCULAS + SEMIBOLD + MÁS INFORMACIÓN */
.noticia-principal-contenido p {
  color: #333;
  font-size: 15px;
  margin-top: 12px;
  text-transform: uppercase;   /* MAYÚSCULAS */
  font-weight: 600;            /* SEMIBOLD */
  line-height: 1.6;
}


/* BOTÓN PEQUEÑO Y MODERNO */
.noticia-principal-contenido .btn-leer {
  display: inline-block;
  background: #0077e6;
  color: #fff;
  padding: 5px 16px;
  border-radius: 30px;
  text-decoration: none;
  font-size: 12px;   /* más pequeño */
  margin-top: 18px;
  font-weight: 700;
  letter-spacing: .6px;
  transition: 0.2s ease-in-out;
}

.noticia-principal-contenido .btn-leer:hover {
  background: #005bb5;
  transform: translateY(-2px);
}



/* DESCRIPCIÓN PRINCIPAL */
.noticia-principal-contenido p {
  color: #333;
  font-size: 15px;
  margin-top: 10px;
  text-transform: uppercase;       /* MAYÚSCULAS */
  font-weight: 600;                /* SEMIBOLD */
  line-height: 1.6;
}

/* BOTÓN MODERNO PEQUEÑO */
.noticia-principal-contenido .btn-leer {
  display: inline-block;        /* que solo ocupe lo que necesita */
  width: auto;                  /* asegura que no se estire al ancho del contenedor */
  max-width: 120px;             /* opcional: limita su tamaño máximo */
  text-align: center;           /* centra el texto dentro del botón */
  background: #0077e6;
  color: #fff;
  padding: 6px 14px;            /* tamaño cómodo */
  border-radius: 20px;
  text-decoration: none;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
}

.noticia-principal-contenido .btn-leer:hover {
  background: #005bb5;
  transform: translateY(-2px);
}



/* Grid de noticias dentro de un container */
.grid-noticias-wrapper {
  background: #ffffff;                /* fondo blanco */
  padding: 30px 20px;                 /* espacio interno */
  border-radius: 16px;                /* bordes redondeados */
  box-shadow: 0 6px 18px rgba(0,0,0,0.12); /* sombra suave */
  margin-bottom: 50px;                /* separación del botón final */
}

.grid-noticias-container {
  padding: 20px;
}

.grid-noticias {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  transform: translateY(-75px); /* ← sube las cards 1 cm aproximadamente */
}

/* Card noticias */
.card-noticia {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: transform 0.2s, box-shadow 0.2s;
}

.card-noticia:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

.card-noticia img {
  width: 100%;
  height: auto;        /* mantiene la proporción y evita pixelado */
  object-fit: cover;   /* corta partes de la imagen pero llena el contenedor */
  border-radius: 12px;
}


.card-noticia .fecha {
  font-size: 12px;
  color: #777;
  padding: 8px 12px 0;
}

.card-noticia h3 {
  font-size: 14px;
  color: #ff6600;
  margin: 4px 12px;
  font-weight: 700;
}

.card-noticia p {
  font-size: 13px;
  color: #444;
  margin: 0 12px 10px;
}

.card-noticia .btn-leer {
  display: inline-block;
  background: #0066cc;
  color: #fff;
  padding: 4px 12px;
  border-radius: 20px;
  text-decoration: none;
  font-size: 12px;
  margin: 0 12px 12px;
  font-weight: bold;
}

/* Botón final naranja */
.btn-ver-mas {
  text-align: center;
  margin: -60px 0 30px 0; /* ← negativo arriba para subir el botón */
}

.btn-ver-mas a {
  background: #ff8000;
  color: #fff;
  padding: 12px 30px;
  border-radius: 20px;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
}

.btn-ver-mas a:hover {
  background: #e67300;
}

/* Responsive */
@media (max-width: 1024px) {
  .noticia-principal-container {
    flex-direction: column;
  }
  .noticia-principal-container img,
  .noticia-principal-contenido {
    width: 100%;
    margin-bottom: 15px;
  }
}

@media (max-width: 600px) {
  .grid-noticias {
    grid-template-columns: 1fr;
  }
}
</style>
</head>
<body>

<div class="container-general">

  <!-- Rectángulo azul con título -->
  <section class="titulo-noticias">
    <h1>NOTICIAS RECIENTES</h1>
  </section>

  <!-- Noticia principal -->
  <section class="noticia-principal-container">
    <img src="/ImagesSV/primer_ganador.webp" alt="Primer ganador">
    <div class="noticia-principal-contenido">
      <p class="fecha">AGO 22, 2025</p>
      <h2>Primer ganador con un premio espectacular</h2>
      <p>Celebración inolvidable del primer ganador de la promoción. Una experiencia llena de emoción, premios y alegría,<br>
      El ganador recibió un premio espectacular frente a todos los participantes, generando momentos de sorpresa y felicidad.</p>
      
      

      <a href="#" class="btn-leer">Leer más</a>
    </div>
  </section>

  <!-- Grid de 8 noticias -->
  <!-- Contenedor blanco para el grid de noticias -->
<section class="grid-noticias-wrapper">
  <div class="grid-noticias-container">
    <div class="grid-noticias">
      <article class="card-noticia">
        <img src="ImagesSV/crecer.webp">
        <p class="fecha">AGO 14, 2025</p>
        <h3>Creciendo con nuestra comunidad</h3>
        <p>Seguimos llevando diversión y premios a todo el país.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
      <article class="card-noticia">
        <img src="ImagesSV/noticia3.webp">
        <p class="fecha">AGO 13, 2025</p>
        <h3>Evento masivo con gran asistencia</h3>
        <p>Una noche llena de música, juegos y premios.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
      <article class="card-noticia">
        <img src="ImagesSV/fiesta1sv.webp">
        <p class="fecha">DIC 20, 2024</p>
        <h3>Fiesta navideña inolvidable</h3>
        <p>Compartimos alegría con toda la comunidad.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
      <article class="card-noticia">
        <img src="ImagesSV/fiesta1sv.webp">
        <p class="fecha">DIC 18, 2024</p>
        <h3>Gran celebración regional</h3>
        <p>Tarde llena de actividades y diversión familiar.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
      <article class="card-noticia">
        <img src="ImagesSV/juegossv.webp">
        <p class="fecha">NOV 25, 2024</p>
        <h3>Juegos, premios y emoción</h3>
        <p>Conectando con nuestros jugadores como nunca.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
      <article class="card-noticia">
        <img src="ImagesSV/noticia2.webp">
        <p class="fecha">NOV 20, 2024</p>
        <h3>Diversión total en SPS</h3>
        <p>El público disfrutó al máximo el gran evento.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
      <article class="card-noticia">
        <img src="ImagesSV/crecer.webp">
        <p class="fecha">AGO 14, 2025</p>
        <h3>Creciendo con nuestra comunidad</h3>
        <p>Seguimos llevando diversión y premios a todo el país.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
      <article class="card-noticia">
        <img src="ImagesSV/noticia3.webp">
        <p class="fecha">AGO 13, 2025</p>
        <h3>Evento masivo con gran asistencia</h3>
        <p>Una noche llena de música, juegos y premios.</p>
        <a href="#" class="btn-leer">Leer más</a>
      </article>
    </div>
  </div>
</section>


  <!-- Botón final naranja -->
  <div class="btn-ver-mas">
    <a href="#">Ver noticias anteriores</a>
  </div>

</div>

</body>
</html>
