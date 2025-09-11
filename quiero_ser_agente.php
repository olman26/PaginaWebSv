<main class="main-body">

  <!-- Banner -->
  <section class="banner">
    <div class="banner-left">
      <img src="persona.png" alt="Persona feliz">
    </div>
    <div class="banner-right">
      <h2><span class="green">SÉ PARTE DE ESTE</span><br>EQUIPO GANADOR</h2>
      <p>JUNTOS MAXIMIZAMOS TUS VENTAS<br>E INGRESOS PARA TU NEGOCIO.</p>
    </div>
  </section>

  <!-- Caja blanca -->
  <section class="card">

    <!-- Requisitos -->
    <div class="requisitos">
      <h2>REQUISITOS</h2>
      <ul>
        <li>Poseer un negocio activo</li>
        <li>Contar con un número de identidad</li>
        <li>Poseer recibo de energía eléctrica</li>
        <li>Experiencia previa vendiendo</li>
        <li>Depósito en garantía</li>
      </ul>
    </div>

    <!-- Formulario -->
    <div class="formulario">
      <h2>¿QUERÉS SER VENDEDOR?<br>¡LLENÁ ESTE FORMULARIO!</h2>

      <form>
        <h3>Ingresar información del propietario del negocio</h3>
        <input type="text" placeholder="Nombre completo">
        <input type="text" placeholder="Número de identidad">

        <h3>Ingresar información del negocio</h3>
        <input type="text" placeholder="Nombre del negocio">
        <input type="text" placeholder="Dirección del negocio">

        <select>
          <option>Selecciona el departamento</option>
          <option>Francisco Morazán</option>
          <option>Cortés</option>
        </select>
        <select>
          <option>Selecciona la ciudad</option>
          <option>Tegucigalpa</option>
          <option>San Pedro Sula</option>
        </select>

        <input type="tel" placeholder="Teléfono">
        <input type="email" placeholder="Correo electrónico">

        <button type="submit">Enviar mensaje</button>
      </form>
    </div>
  </section>

  <!-- Beneficios -->
  <section class="beneficios">
    <h2>BENEFICIOS</h2>
    <div class="beneficios-grid">
      <div class="beneficio naranja">
        <h3>💰 Comisión diaria inmediata</h3>
        <p>Recibe comisiones de forma rápida.</p>
      </div>
      <div class="beneficio morado">
        <h3>📋 Planes de incentivos</h3>
        <p>Premios y recompensas especiales.</p>
      </div>
      <div class="beneficio rosa">
        <h3>🚶‍♂️ Tráfico en el negocio</h3>
        <p>Atrae más clientes con la venta de boletos.</p>
      </div>
      <div class="beneficio celeste">
        <h3>🤝 Asesoría personalizada</h3>
        <p>Un ejecutivo te apoyará en todo momento.</p>
      </div>
      <div class="beneficio verde">
        <h3>📞 Ayuda 365 días al año</h3>
        <p>Soporte continuo para tu negocio.</p>
      </div>
      <div class="beneficio amarillo">
        <h3>📢 Publicidad</h3>
        <p>Apoyo en campañas y anuncios para tu negocio.</p>
      </div>
    </div>
  </section>
</main>


<style>
body {
  margin: 0;
  font-family: 'Arial', sans-serif;
  background: #fff;
  color: #333;
}

.main-body {
  background: #fff;
}

/* Banner */
.banner {
  display: flex;
  align-items: center;
  background: #ff6600;
  color: white;
  padding: 30px 50px;
}
.banner-left img {
  max-height: 250px;
}
.banner-right {
  margin-left: 30px;
}
.banner h2 {
  font-size: 32px;
  font-weight: bold;
}
.banner .green {
  color: #b5ff5f;
}
.banner p {
  margin-top: 10px;
  font-size: 18px;
  line-height: 1.4;
}

/* Caja blanca */
.card {
  background: #fff;
  margin: -40px auto 40px;
  padding: 40px;
  border-radius: 16px;
  box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
  max-width: 900px;
}

/* Requisitos */
.requisitos {
  text-align: center;
  margin-bottom: 40px;
}
.requisitos h2 {
  color: #ff6600;
  font-size: 26px;
}
.requisitos ul {
  list-style: none;
  padding: 0;
  margin-top: 20px;
}
.requisitos li {
  font-size: 18px;
  margin: 10px 0;
}

/* Formulario */
.formulario h2 {
  text-align: center;
  color: #0066cc;
  margin-bottom: 20px;
}
.formulario form {
  display: grid;
  gap: 15px;
  max-width: 600px;
  margin: 0 auto;
}
.formulario h3 {
  text-align: left;
  font-size: 18px;
  margin-top: 20px;
  margin-bottom: 5px;
}
.formulario input, .formulario select {
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 15px;
}
.formulario button {
  background: #00a0e3;
  color: white;
  padding: 14px;
  font-size: 18px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}
.formulario button:hover {
  background: #0084bf;
}

/* Beneficios */
.beneficios {
  background: #fdf9f3;
  padding: 50px 20px;
  text-align: center;
}
.beneficios h2 {
  color: #0066cc;
  font-size: 28px;
  margin-bottom: 30px;
}
.beneficios-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  gap: 20px;
  max-width: 1000px;
  margin: 0 auto;
}
.beneficio {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
}
.beneficio h3 {
  font-size: 18px;
  margin-bottom: 8px;
}
.beneficio.naranja { border-top: 4px solid #ff6600; }
.beneficio.morado { border-top: 4px solid #7a3cff; }
.beneficio.rosa { border-top: 4px solid #ff4da6; }
.beneficio.celeste { border-top: 4px solid #00a0e3; }
.beneficio.verde { border-top: 4px solid #2ecc71; }
.beneficio.amarillo { border-top: 4px solid #f1c40f; }
</style>
