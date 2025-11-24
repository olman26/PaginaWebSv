<!DOCTYPE html> 
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loto - Lotocentros</title>

<style>
 body {
  margin: 0;
  font-family: Arial, sans-serif;
  color: #333;

  /* Fondo: blanco 2cm arriba, beige en el medio, blanco 2cm abajo */
  background: linear-gradient(to bottom,
              white 0cm,
              white 2cm,
              #f6eedd 2cm,
              #f6eedd calc(100% - 2cm),
              white calc(100% - 2cm),
              white 100%);
}






  .container {
    max-width: 1200px;
    margin: 100px auto 0 auto;
    padding: 20px;
  }

  /* MAPA */
  .map-section {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
  }

  .map-section h2 {
    color: #ff7f00;
    font-weight: 900;
    font-size: 28px;
  }

  .map-section img {
    width: 80%;
    display: block;
    margin: auto;
  }

  /* ACORDEÓN */
  .accordion {
    background: #0b52c3;
    color: #fff;
    cursor: pointer;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    width: 100%;
    font-size: 17px;
    font-weight: bold;
    margin-top: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  .accordion:after {
    content: "▼";   /* flecha hacia abajo */
    position: absolute;
    right: 20px;
    font-size: 18px;
  }

  .accordion.active:after {
    content: "▲"; /* flecha hacia arriba */
  }

  .panel {
    display: none;
    background: #fffef7;
    border-radius: 10px;
    margin-top: 10px;
    padding: 15px 20px;
    font-size: 15px;
    color: #333;
    border: 1px solid #e2d9c3;
    line-height: 1.5;
  }

  .panel p {
    background: #ffffff;
    padding: 10px 12px;
    border-radius: 6px;
    margin-bottom: 12px;
    border-left: 4px solid #ff7f00;
  }

  /* OFICINAS Y CONTACTO */
  .offices-contact {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 30px;
  }

  .office, .contact {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    flex: 1 1 48%;
    box-sizing: border-box;
  }

  .office h3, .contact h3 {
    color: #ff7f00;
    text-align: center;
    font-weight: 900;
    font-size: 22px;
  }

  /* CIUDADES */
  .city {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #0b52c3;
    font-weight: 900;
    font-size: 20px;
    margin-top: 15px;
  }

  .city img {
    width: 40px;
    margin-bottom: 5px;
  }

  /* TELÉFONOS */
  .contact-info {
    text-align: center;
    color: #0b52c3;
    font-weight: 700;
    font-size: 18px;
    margin-top: 15px;
  }

  .contact-info img {
    width: 26px;
    margin-right: 5px;
    vertical-align: middle;
  }

  /* FORMULARIO */
  input, textarea {
    width: 100%;
    padding: 8px;
    margin: 6px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .info-text {
    text-align: center;
    color: #0b52c3;
    font-weight: 700;
    font-size: 14px;
    margin-bottom: 15px;
  }

  .submit-button {
    background: #0b52c3;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    width: auto;
  }

  /* RESPONSIVE */
  @media (max-width: 767px) {
    .offices-contact {
      flex-direction: column;
    }
  }
</style>
</head>

<body>



<div class="container">

  <!-- MAPA -->
  <div class="map-section">
    <h2>LOTOCENTROS A NIVEL NACIONAL</h2>
    <img src="ImagesSV/mapa honduras.svg" alt="Mapa">

    <button class="accordion">VER HORARIOS</button>

    <div class="panel">
      <p><strong>LotoCentro en Metrocentro San Salvador:</strong> Lunes a Viernes de 9:00 a 7:00</p>
      <p><strong>Kiosko Santa Ana en Metrocentro:</strong> Lunes a Viernes de 9:00 a 7:00</p>
      <p><strong>Kiosko Aguilares en El Encuentro:</strong> Lunes a Viernes de 9:00 a 7:00</p>
    </div>
  </div>

  <!-- OFICINAS Y CONTACTO -->
  <div class="offices-contact">

    <div class="office">
      <h3>OFICINAS LOTO</h3>

      <div class="city">
        <img src="ImagesSV/pin ubicación.svg">
        Oficina Central
      </div>
      <p style="text-align:center;">Carretera al Puerto de La Libertad, KM 11 ½, Antiguo Cuscatlán.</p>

      <div class="city">
        <img src="ImagesSV/pin ubicación.svg">
        Lotocentro Metrocentro
      </div>
      <p style="text-align:center;">Centro Comercial Metrocentro, 1ra etapa. Frente a Teatro Luis Poma.</p>

      <div class="contact-info">
        <img src="ImagesSV/icono telefono.svg">
        +(503) 2555-7900<br>
        loto@loto.sv
      </div>
    </div>

    <div class="contact">
      <h3>CONTACTANOS</h3>
      <div class="info-text">
        LLENA TODOS LOS CAMPOS PARA PODER ATENDERTE.
      </div>

      <form>
        <input type="text" placeholder="Nombre completo *" required>
        <input type="email" placeholder="Correo electrónico *" required>
        <input type="text" placeholder="Asunto *" required>
        <textarea rows="5" placeholder="Mensaje *" required></textarea>
        <button class="submit-button">Enviar</button>
      </form>
    </div>

  </div>

</div>

<script>
  const acc = document.getElementsByClassName("accordion");
  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      panel.style.display = panel.style.display === "block" ? "none" : "block";
    });
  }
</script>

</body>
</html>
