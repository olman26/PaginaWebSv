<main class="noticias-body">

  <!-- Título -->
  <section class="titulo-noticias">
    <h1>NOTICIAS RECIENTES</h1>
  </section>

  <!-- Noticia destacada -->
  <section class="noticia-destacada">
    <img src="noticia-destacada.jpg" alt="Noticia destacada">
    <div class="contenido">
      <p class="fecha">AGO 22, 2025</p>
      <h2>CLAUSURA DEL TORNEO DE TENIS “OPEN CIRCUIT” 08 AL 16 DE AGOSTO EN LOMAS CLUB DEPORTIVO</h2>
      <p>El Open Circuit contó con el valioso respaldo de la marca patrocinadora principal, Atresoros. 
         Su participación fue fundamental para el desarrollo y éxito del torneo, su apoyo no solo elevó 
         el nivel organizativo del evento.</p>
      <a href="#" class="btn-azul">Leer más</a>
    </div>
  </section>

  <!-- Noticias grid -->
  <section class="noticias-grid">
    <article class="noticia">
      <img src="noticia1.jpg" alt="Noticia 1">
      <p class="fecha">AGO 21, 2025</p>
      <h3>Loto lleva premios, música y diversión al sector de La Ceiba</h3>
      <p>El bingo con todo Loto se realizó en Cascadas Mall...</p>
      <a href="#" class="btn-azul">Leer más</a>
    </article>

    <article class="noticia">
      <img src="noticia2.jpg" alt="Noticia 2">
      <p class="fecha">AGO 20, 2025</p>
      <h3>Juga Tres encendió la diversión con show musical en San Pedro Sula</h3>
      <p>Una tarde inolvidable con premios y sorpresas...</p>
      <a href="#" class="btn-azul">Leer más</a>
    </article>

    <article class="noticia">
      <img src="noticia3.jpg" alt="Noticia 3">
      <p class="fecha">AGO 19, 2025</p>
      <h3>Bingo con todo Loto primer sorteo en Cascadas Mall</h3>
      <p>Gran asistencia y participación en el evento...</p>
      <a href="#" class="btn-azul">Leer más</a>
    </article>

    <!-- Agrega más noticias copiando el bloque <article> -->
  </section>

  <!-- Botón final -->
  <div class="btn-ver-mas">
    <a href="#">Ver noticias anteriores</a>
  </div>
</main>


<style>
/* Fondo general */
.noticias-body {
  background: #fff;
  padding: 20px;
}

/* Título */
.titulo-noticias {
  text-align: center;
  background: #e8f0ff;
  padding: 20px;
  margin-bottom: 30px;
}
.titulo-noticias h1 {
  color: #0066cc;
  font-size: 32px;
  font-weight: bold;
  margin: 0;
}

/* Noticia destacada */
.noticia-destacada {
  display: flex;
  gap: 20px;
  margin-bottom: 40px;
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
.noticia-destacada img {
  width: 40%;
  border-radius: 8px;
}
.noticia-destacada .contenido {
  flex: 1;
}
.noticia-destacada .fecha {
  font-size: 14px;
  color: #777;
  margin-bottom: 5px;
}
.noticia-destacada h2 {
  font-size: 20px;
  color: #ff6600;
  margin: 10px 0;
}
.noticia-destacada p {
  font-size: 15px;
  color: #444;
  line-height: 1.4;
}
.btn-azul {
  display: inline-block;
  background: #0066cc;
  color: white;
  padding: 8px 16px;
  border-radius: 6px;
  text-decoration: none;
  margin-top: 10px;
}
.btn-azul:hover {
  background: #004a99;
}

/* Grid noticias */
.noticias-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  gap: 20px;
  margin-bottom: 40px;
}
.noticia {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  padding: 15px;
  display: flex;
  flex-direction: column;
}
.noticia img {
  width: 100%;
  border-radius: 8px;
  margin-bottom: 10px;
}
.noticia .fecha {
  font-size: 13px;
  color: #777;
}
.noticia h3 {
  font-size: 16px;
  color: #ff6600;
  margin: 8px 0;
}
.noticia p {
  flex: 1;
  font-size: 14px;
  color: #444;
}
.noticia .btn-azul {
  margin-top: 10px;
  align-self: flex-start;
}

/* Botón ver más */
.btn-ver-mas {
  text-align: center;
  margin-bottom: 40px;
}
.btn-ver-mas a {
  background: #ff6600;
  color: #fff;
  padding: 14px 24px;
  border-radius: 8px;
  font-size: 18px;
  text-decoration: none;
  font-weight: bold;
}
.btn-ver-mas a:hover {
  background: #e65a00;
}
</style>
