<!-- BODY -->
<main class="main-body">

  <!-- Banner -->
  <section class="banner">
    <div class="banner-text">
      <h2>SÉ PARTE DE ESTE <span class="green">EQUIPO GANADOR</span></h2>
      <p>Juntos maximizamos tus ventas e ingresos para tu negocio.</p>
    </div>
    <div class="banner-img">
      <img src="tu-imagen.png" alt="Imagen persona feliz" />
    </div>
  </section>

  <!-- Requisitos -->
  <section class="requisitos">
    <h2>REQUISITOS</h2>
    <ul>
      <li>Poseer un negocio activo</li>
      <li>Contar con un número de identidad</li>
      <li>Tener recibo de energía eléctrica</li>
      <li>Experiencia previa vendiendo</li>
      <li>Depósito en garantía</li>
    </ul>
  </section>

  <!-- Formulario -->
  <section class="formulario">
    <h2>¿QUERÉS SER VENDEDOR?<br> ¡LLENÁ ESTE FORMULARIO!</h2>

    <form>
      <!-- Propietario -->
      <h3>Ingresar información del propietario del negocio</h3>
      <input type="text" placeholder="Nombre completo" required>
      <input type="text" placeholder="Número de identidad" required>

      <!-- Negocio -->
      <h3>Ingresar información del negocio</h3>
      <input type="text" placeholder="Nombre del negocio" required>
      <input type="text" placeholder="Dirección del negocio" required>

      <!-- Dropdowns -->
      <select required>
        <option value="">Selecciona el departamento</option>
        <option>Francisco Morazán</option>
        <option>Cortés</option>
        <option>Atlántida</option>
      </select>

      <select required>
        <option value="">Selecciona la ciudad</option>
        <option>Tegucigalpa</option>
        <option>San Pedro Sula</option>
        <option>La Ceiba</option>
      </select>

      <!-- Contacto -->
      <input type="tel" placeholder="Teléfono" required>
      <input type="email" placeholder="Correo electrónico" required>

      <button type="submit">Enviar mensaje</button>
    </form>
  </section>

  <!-- Beneficios -->
  <section class="beneficios">
    <h2>BENEFICIOS</h2>
    <div class="beneficios-grid">
      <div class="beneficio">
        <h3>💰 Comisión diaria inmediata</h3>
        <p>Recibe comisiones de forma rápida.</p>
      </div>
      <div class="beneficio">
        <h3>📋 Planes de incentivos</h3>
        <p>Premios y recompensas especiales.</p>
      </div>
      <div class="beneficio">
        <h3>🚶‍♂️ Tráfico en el negocio</h3>
        <p>Atrae más clientes con la venta de boletos.</p>
      </div>
      <div class="beneficio">
        <h3>🤝 Asesoría personalizada</h3>
        <p>Un ejecutivo te apoyará en todo momento.</p>
      </div>
      <div class="beneficio">
        <h3>📞 Ayuda 365 días al año</h3>
        <p>Soporte continuo para tu negocio.</p>
      </div>
      <div class="beneficio">
        <h3>📢 Publicidad</h3>
        <p>Apoyo en campañas y anuncios para tu negocio.</p>
      </div>
    </div>
  </section>
</main>


<!-- CSS -->
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.main-body {
  background: #fff;
}

/* Banner */
.banner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #ff6b00;
  color: white;
  padding: 40px 20px;
}
.banner h2 {
  font-size: 32px;
}
.banner .green {
  color: #82d20f;
}
.banner p {
  margin-top: 10px;
  font-size: 18px;
}
.banner-img img {
  max-width: 200px;
}

/* Requisitos */
.requisitos {
  background: #fff7eb;
  text-align: center;
  padding: 40px 20px;
}
.requisitos h2 {
  color: #ff6b00;
  font-size: 28px;
}
.requisitos ul {
  list-style: none;
  padding: 0;
  margin-top: 20px;
}
.requisitos li {
  font-size: 18px;
  margin: 8px 0;
}

/* Formulario */
.formulario {
  background: #fff;
  text-align: center;
  padding: 40px 20px;
}
.formulario h2 {
  color: #0066cc;
  margin-bottom: 20px;
}
.formulario form {
  max-width: 600px;
  margin: 0 auto;
  display: grid;
  gap: 15px;
}
.formulario input, .formulario select {
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 16px;
}
.formulario button {
  background: #ff6b00;
  color: white;
  padding: 14px;
  font-size: 18px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
.formulario button:hover {
  background: #e65a00;
}

/* Beneficios */
.beneficios {
  background: #fff7eb;
  text-align: center;
  padding: 40px 20px;
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
}
.beneficio {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
}
.beneficio h3 {
  margin-bottom: 10px;
  font-size: 18px;
}
</style>
