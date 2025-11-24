<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Vendedor</title>
<style>
  body {
    font-family: "Segoe UI", sans-serif;
    margin: 0;
    padding: 0;
    background: white;
    color: #333;
    text-align: center;
  }

  /* ===== HERO ===== */
  .hero {
    background: #FF9800;
    padding: 40px 20px;
  }
  .hero-content {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-wrap: wrap;
    gap: 30px;
    max-width: 1000px;
    margin: 0 auto;
  }
  .hero-img { max-width: 300px; width: 100%; border-radius: 12px; margin-left: -20px; }
  .hero-text-container { display: flex; flex-direction: column; align-items: flex-start; }
  .hero-text-img { max-width: 400px; width: 100%; }
  .hero-subtitle { text-align: center; font-weight: 800; font-size: 34px; line-height: 1.2; color: white; }

  /* ===== CONTENEDOR BEIGE PRINCIPAL ===== */
  .info-container {
    background: #FFEFD9; /* beige */
    padding: 40px 20px;
    border-radius: 16px;
    max-width: 1100px;
    margin: -1cm auto 40px auto;
    display: flex;
    flex-direction: column;
    gap: 40px;
  }

  /* ===== REQUISITOS ===== */
  .requisitos { display: flex; align-items: flex-start; gap: 20px; flex-wrap: wrap; }
  .requisitos ul { list-style-type: none; padding: 0; margin: 0; flex: 1; }
  .requisitos li { margin-bottom: 10px; display: flex; align-items: center; gap: 10px; position: relative; padding-left: 30px; color: #0077CC; font-weight: 600; font-size: 16px; }
  .requisitos li::before {
    content: "✔";
    color: white;
    background-color: #FF9800;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    font-size: 12px;
  }
  .requisitos img { max-width: 150px; border-radius: 12px; }

  /* ===== FORMULARIO ===== */
  .form-container {
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    max-width: 1000px;
    width: 95%;
    margin: 0 auto;
    animation: fadeIn .6s ease-out;
}

.form-section-title {
  font-size: 26px;
  font-weight: 800;
  color: #0077CC;
  margin-bottom: 25px;
  text-align: left;
  background: none;     /* elimina cualquier color de fondo */
  padding: 0;           /* elimina el bloque que parecía un rectángulo */
  border-left: 6px solid #FF9800; /* barra moderna a la izquierda */
  padding-left: 12px;
}


.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px 35px;
}

@media (max-width: 700px) {
    .form-grid { grid-template-columns: 1fr; }
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
  font-weight: 700;
  margin-bottom: 5px;
  color: #333;
  font-size: 15px;
  text-align: left;    /* <- asegura que siempre estén a la izquierda */
}


.form-group input,
.form-group select,
.form-group textarea {
    padding: 14px;
    border-radius: 12px;
    border: 1px solid #dcdcdc;
    font-size: 15px;
    background: #fafafa;
    transition: all .25s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #0077CC;
    background: white;
    box-shadow: 0 0 0 4px rgba(0,119,204,0.15);
    outline: none;
}

.file-upload input[type="file"] {
    margin-top: 10px;
    border: none;
    padding: 10px;
    border-radius: 10px;
    background: linear-gradient(135deg, #0077CC, #005fa3);
    color: white;
    cursor: pointer;
    font-size: 14px;
    transition: .25s;
}

.file-upload input[type="file"]:hover {
    transform: scale(1.03);
}

.btn-submit {
    background: linear-gradient(135deg, #FF9800, #ff7a00);
    color: white;
    border: none;
    padding: 16px 40px;
    font-size: 18px;
    border-radius: 50px;
    cursor: pointer;
    margin: 30px auto 0 auto;
    display: block;
    transition: .35s ease;
    font-weight: 700;
}

.btn-submit:hover {
    background: linear-gradient(135deg, #ff7a00, #FF9800);
    transform: translateY(-4px);
}

/* EFECTO DE APARICIÓN */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}



  /* ===== BENEFICIOS ===== */
  .beneficios-title { text-align: center; color: #0077CC; font-size: 32px; font-weight: 800; margin-bottom: 20px; }
  .beneficios-container { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px 30px; }
  .beneficio { display: flex; align-items: flex-start; gap: 15px; text-align: left; padding: 20px; border-radius: 12px; background: #ffffff; box-shadow: 0 6px 20px rgba(0,0,0,0.05); transition: transform 0.3s, box-shadow 0.3s; }
  .beneficio:hover { transform: translateY(-5px); box-shadow: 0 12px 25px rgba(0,0,0,0.1); }
  .beneficio img { width: 50px; flex-shrink: 0; }
  .beneficio-text h4 { color: #0077CC; font-weight: 700; font-size: 16px; margin: 0 0 5px 0; }
  .beneficio-text p { font-size: 14px; opacity: 0.85; margin: 0; }
  @media (max-width: 700px) { .beneficios-container, .form-grid, .requisitos { grid-template-columns: 1fr; } }
</style>
</head>
<body>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <img src="ImagesSV/Abigail.png" alt="Modelo Abigail" class="hero-img">
    <div class="hero-text-container">
      <img src="ImagesSV/equipoganador.png" alt="Equipo Ganador" class="hero-text-img">
      <p class="hero-subtitle">
        <span style="font-size:28px; font-weight:700;">JUNTOS MAXIMIZAMOS TUS VENTAS</span><br>
        <span style="font-size:28px; font-weight:700;">E INGRESOS PARA TU NEGOCIO</span>
      </p>
    </div>
  </div>
</section>

<!-- CONTENEDOR PRINCIPAL BEIGE -->
<div class="info-container">

  <!-- REQUISITOS -->
  <section class="requisitos-section">
    <h2 class="requisitos-title">REQUISITOS</h2>
    <div class="requisitos">
      <ul>
        <li>POSEER UN NEGOCIO ACTIVO</li>
        <li>CONTAR CON RTN NUMERICO E IDENTIDAD VIGENTE</li>
        <li>RECIBO PUBLICO (ENERGIA ELECTRICA)</li>
        <li>CUENTA BANCARIA VIGENTE A NOMBRE DEL PROPIETARIO</li>
        <li>DEPOSITO EN GARANTIA</li>
      </ul>
      <img src="ImagesSV/Imagen requisitos.png" alt="Ilustración Requisitos">
    </div>
  </section>

  <!-- FORMULARIO -->
  <section class="form-container">
    <h2 class="form-section-title">Ingresar información del propietario del negocio</h2>
    <div class="form-grid">
      <div class="form-group"><label>Nombre</label><input type="text" placeholder="Nombre"></div>
      <div class="form-group"><label>Apellidos</label><input type="text" placeholder="Apellidos"></div>
      <div class="form-group"><label>Número de Identidad</label><input type="text" placeholder="Número de Identidad"></div>
      <div class="form-group"><label>Teléfono</label><input type="tel" placeholder="Teléfono"></div>
      <div class="form-group"><label>Correo Electrónico</label><input type="email" placeholder="Correo Electrónico"></div>
    </div>

    <h2 class="form-section-title">Ingresar información del negocio</h2>
    <div class="form-grid">
      <div class="form-group"><label>Nombre del negocio</label><input type="text" placeholder="Nombre del negocio"></div>
      <div class="form-group"><label>Dirección actual del negocio</label><input type="text" placeholder="Dirección del negocio"></div>
      <div class="form-group"><label>Tipo de negocio</label>
        <select>
          <option>Pulpería</option>
          <option>Mercadito</option>
          <option>Farmacia</option>
        </select>
      </div>
      <div class="form-group file-upload"><label>Sube la foto de tu negocio</label><input type="file" accept="image/*"></div>
      <div class="form-group"><label>Departamento</label>
        <select id="departamento">
          <option value="">Seleccione Departamento</option>
          <option>Francisco Morazán</option>
          <option>Cortés</option>
          <option>Atlántida</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group"><label>Ciudad</label><input type="text" placeholder="Ciudad"></div>
      <div class="form-group"><label>Municipio</label><input type="text" placeholder="Municipio"></div>
      <div class="form-group"><label>Barrio / Colonia</label><input type="text" placeholder="Barrio / Colonia"></div>
    </div>
    <button class="btn-submit">Enviar mensaje</button>
  </section>

  <!-- BENEFICIOS -->
  <h2 class="beneficios-title">BENEFICIOS</h2>
  <section class="beneficios-container">
    <div class="beneficio"><img src="ImagesSV/icono comision.svg"><div class="beneficio-text"><h4>COMISIÓN DIARIA INMEDIATA</h4><p>Recibí comisiones por venta y pago de premios.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono asesoria.svg"><div class="beneficio-text"><h4>ASESORÍA PERSONALIZADA</h4><p>Asesoría de ventas, reportes contables y capacitación permanente.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono incentivos.svg"><div class="beneficio-text"><h4>PLANES DE INCENTIVOS</h4><p>Accede a promociones especiales diseñadas para aumentar tus ingresos.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono trafico.svg"><div class="beneficio-text"><h4>TRÁFICO EN EL NEGOCIO</h4><p>La Loteria Electronica atraera nuevos clientes a tu negocio.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono publicidad.svg"><div class="beneficio-text"><h4>PUBLICIDAD</h4><p>Recibí material publicitario y apoyo impreso sin ningun costo.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono ayuda.svg"><div class="beneficio-text"><h4>AYUDA 365 DÍAS</h4><p>Brindamos atención continua todo el año a través de nuestro call center.</p></div></div>
  </section>

</div>
</body>
</html>
