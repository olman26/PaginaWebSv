<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOTO - HOME</title>
  <link rel="stylesheet" href="/css/style.css" />
  <style>
    body {
      font-family: 'Helvetica Rounded Black', Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Dropdown juegos corregido */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown > a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 5px 10px;
      transition: color 0.3s;
    }

    .dropdown:hover > a {
      color: #0070c0; /* azul hover */
    }

   .dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 6px 12px rgba(0,0,0,0.2);
  min-width: 180px;
  z-index: 1000;
}

.dropdown-content a {
  display: block;
  padding: 10px 15px;
  color: black !important;
  text-decoration: none;
  font-weight: normal;
}

.dropdown-content a:hover {
  background-color: #0070c0;
  color: white !important;
}



    .dropdown:hover .dropdown-content {
      display: block; /* aparece inmediatamente */
    }

    /* Hover azul para links del nav principal */
    .nav-menu a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 5px 10px;
      transition: color 0.3s;
    }

    .nav-menu a:hover {
      color: #0070c0; /* azul hover */
    }


    /* ================= RESPONSIVE SOLO MÓVIL ================= */
@media (max-width: 768px) {

  /* Top menu */
  .top-menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
    padding: 10px;
    text-align: center;
  }

  .top-menu a {
    font-size: 12px;
    padding: 5px;
  }

  /* Header principal */
  .main-header {
    flex-direction: column;
    align-items: center;
    gap: 15px;
  }

  /* Logo */
  .logo img {
    max-width: 180px;
    height: auto;
  }

  /* Nav */
  .nav-menu {
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    text-align: center;
  }

  .nav-menu a {
    font-size: 14px;
    padding: 6px 8px;
  }

  /* Dropdown */
  .dropdown-content {
    left: 50%;
    transform: translateX(-50%);
    min-width: 160px;
  }

  /* Botón jugar */
  .play-button img {
    max-width: 200px;
    height: auto;
  }

  /* Botón jugar en línea */
.play-button a {
  display: inline-block;
  background: none; /* elimina cualquier fondo */
  padding: 0;
}

.play-button img {
  display: block; /* evita espacio extra */
  max-width: 200px;
  height: auto;
}

}








  </style>
</head>
<body>
  <header>
    <!-- Menú superior azul -->
    <div class="top-menu">
      <a href="index.php?pag=sobre_nosotros">Sobre nosotros</a>
      <a href="index.php?pag=quiero_ser_agente">Quiero ser vendedor</a>
      <a href=" https://www.google.com/maps/d/u/1/edit?mid=1gerRqZPZbxOs3JlQuXiYnUMIGiLWpvA&usp=sharing" target="_blank">Puntos de venta</a>
      <a href="index.php?pag=aplica_con_nosotros">Aplicá con nosotros</a>
    </div>

    <!-- Cuadro naranja con logo, navegación y botón -->
    <div class="main-header">
      <div class="logo">
        <a href="https://paginawebsvcac.azurewebsites.net/">
          <img src="/ImagesSV/Logo.svg" alt="Logo" style="cursor:pointer;">
        </a>
      </div>

      <nav class="nav-menu">
        <div class="dropdown">
          <a href="#">JUEGOS ▾</a>
          <div class="dropdown-content">
            <a href="index.php?pag=diaria">Diaria</a>
            <a href="index.php?pag=super_premio">SuperPremio</a>
            <a href="index.php?pag=instacash">InstaCash</a>
            <a href="index.php?pag=apostemos">Apostemos</a>
          </div>
        </div>
        <a href="index.php?pag=noticias">NOTICIAS</a>
        <a href="index.php?pag=contactanos">CONTÁCTANOS</a>
      </nav>

      <div class="play-button">
        <a href="https://juega.loto.sv/websales/?pk_campaign=WS_SITE_BOTON_WEBSALES" target="_blank">
          <img src="/ImagesSV/boton-jugar-en-linea.png" alt="Jugar en línea">
        </a>
      </div>
    </div>
  </header>

  <script>
document.addEventListener("DOMContentLoaded", function () {
  const btn = document.querySelector(".dropdown > a");
  const content = document.querySelector(".dropdown-content");

  btn.addEventListener("click", function(e) {
    e.preventDefault();
    content.style.display = content.style.display === "block" ? "none" : "block";
  });

  document.addEventListener("click", function(e) {
    if (!document.querySelector(".dropdown").contains(e.target)) {
      content.style.display = "none";
    }
  });
});
</script>

</body>
</html>
