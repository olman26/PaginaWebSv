<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loto - Selección de País</title>



  <style>
/* Llamada a la fuente desde tu servidor */
@font-face { font-family: 'HelveticaRounded'; src: url('fonts/HelveticaRoundedLTStd-Bd.ttf') format('truetype'); /* Ruta relativa al archivo de la fuente */ font-weight: bold; font-style: normal; }


    /* RESET */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #fff7eb;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      padding: 0 10px;
    }

    /* HEADER */
    header {
      width: 100%;
      background-color: #ff7a00;
      display: flex;
      justify-content: center;
      padding: 5px 0;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    header img {
      width: 130px;
      height: auto;
      position: relative;
      top: 1.5cm;
      z-index: 1;
    }

    /* CONTENIDO */
    .main-content {
      margin-top: 2cm;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* TEXTO BIENVENIDA */
    .welcome-text {
      text-align: center;
      margin: 30px 0 20px;
    }

    .welcome-text h1 {
      font-size: 16px;
      color: #0052a5;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .welcome-text h2 {
      font-size: 34px;
      color: #ff7a00;
      font-weight: 900;
    }

    /* CONTENEDOR PAISES */
    .countries {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .country-card {
      background-color: #fff;
      border-radius: 20px;
      width: 200px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      cursor: pointer;
      overflow: visible; 
      position: relative;
      transition: 
        transform 0.3s ease,
        box-shadow 0.3s ease,
        background-color 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Efecto hover tarjeta */
    .country-card:hover {
      background-color: #0052a5;
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    .country-card:active {
      transform: translateY(2px) scale(0.98);
    }

    /* Nombre del país */
    .country-card .name {
      text-align: center;
      padding: 10px 0;
      font-size: 18px;
      font-weight: bold;
      color: #0052a5;
      position: relative;
      z-index: 2;
      transition: color 0.3s ease;
    }

    .country-card:hover .name {
      color: #fff;
    }

    /* Contenedor imagen */
    .image-wrapper {
      position: relative;
      width: 100%;
      height: 180px;
      margin-top: 0px;
    }

    .image-wrapper img.main-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: inherit;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    /* Bandera flotante */
    .image-wrapper img.flag {
      position: absolute;
      top: 140px; /* ajustar para sobresalir */
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 3px 8px rgba(0,0,0,0.35);
      border: 2px solid #fff;
      z-index: 5;
      transition: top 0.3s ease;
    }

    /* Mover bandera al pasar cursor */
    .country-card:hover img.flag {
      top: 130px;
    }

    /* FOOTER */
    footer {
      width: 100%;
      height: 40px;
      background-color: #0052a5;
      margin-top: auto;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .country-card {
        width: 45%;
      }
    }

    @media (max-width: 480px) {
      .country-card {
        width: 100%;
      }
      .welcome-text h2 {
        font-size: 26px;
      }
      .image-wrapper img.flag {
        width: 50px;
        height: 50px;
        top: 120px;
      }
    }
  </style>
</head>

<body>

  <header>
    <img src="/ImagesSV/Logo.svg" alt="Loto Logo">
  </header>

  <div class="main-content">

    <div class="welcome-text">
      <h1>TE DAMOS LA BIENVENIDA</h1>
      <h2>SELECCIONÁ TU PAÍS</h2>
    </div>

    <div class="countries">

      <a href="paginawebsvcac.azurewebsites.net" target="_blank" style="text-decoration: none;">
  <div class="country-card">
    <div class="name">El Salvador</div>
    <div class="image-wrapper">
      <img class="main-image" src="/ImagesSV/Selección SV.png" alt="El Salvador">
      <img class="flag" src="/ImagesSV/El Salvador.svg" alt="Bandera El Salvador">
    </div>
  </div>
</a>


      <a href="https://loto.hn/" target="_blank" style="text-decoration: none;">
  <div class="country-card">
    <div class="name">Honduras</div>
    <div class="image-wrapper">
      <img class="main-image" src="/ImagesSV/Selección HN.png" alt="Honduras">
      <img class="flag" src="/ImagesSV/Honduras.svg" alt="Bandera Honduras">
    </div>
  </div>
</a>

<a href="https://loto.com.ni/" target="_blank" style="text-decoration: none;">
  <div class="country-card">
    <div class="name">Nicaragua</div>
    <div class="image-wrapper">
      <img class="main-image" src="/ImagesSV/Selección NIC.png" alt="Nicaragua">
      <img class="flag" src="/ImagesSV/Nicaragua.svg" alt="Bandera Nicaragua">
    </div>
  </div>
</a>


    </div>
  </div>

  <footer></footer>

</body>
</html>
