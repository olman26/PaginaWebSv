<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOTO - HOME</title>
  <link rel="icon" type="image/png" href="/imagesSV/icono.png">
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

  /* Top menu más compacto */
  .top-menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 5px;         /* menos espacio entre links */
    padding: 5px 0;   /* menos padding */
    text-align: center;
  }

  .top-menu a {
    font-size: 11px;  /* letras más pequeñas */
    padding: 3px 5px; /* menos padding interno */
  }

  /* Header principal más compacto */
  .main-header {
    flex-direction: column;
    align-items: center;
    gap: 8px;         /* menos espacio entre logo, nav y botón */
    padding: 5px 0;
  }

  /* Logo más pequeño */
  .logo img {
    max-width: 140px; /* antes 180px */
    height: auto;
  }

  /* Nav más compacto */
  .nav-menu {
    flex-wrap: wrap;
    justify-content: center;
    gap: 5px;
    text-align: center;
  }

  .nav-menu a {
    font-size: 12px;  /* antes 14px */
    padding: 4px 6px; /* antes 6px 8px */
  }

  /* Dropdown */
  .dropdown-content {
    left: 50%;
    transform: translateX(-50%);
    min-width: 140px; /* menos ancho en móvil */
  }

  /* Botón jugar más pequeño */
  .play-button img {
    max-width: 160px; /* antes 200px */
    height: auto;
  }

  /* Botón jugar en línea */
  .play-button a {
    display: inline-block;
    background: none;
    padding: 0;
  }

  .play-button img {
    display: block;
    max-width: 160px; /* mantiene coherencia con arriba */
    height: auto;
  }

}
@media (max-width: 768px) {

  .top-menu {
    display: grid;
    grid-template-columns: repeat(2, auto); /* 2 y 2, compactos */
    justify-content: center;                /* centra el bloque */
    column-gap: 14px;                       /* separación horizontal CONTROLADA */
    row-gap: 6px;                           /* separación vertical */
    padding: 6px 10px;
  }

  .top-menu a {
    font-size: 11px;
    padding: 4px 8px;
    white-space: nowrap;                    /* no se parten */
  }

}
  </style>

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T1ZVRGYX8X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-T1ZVRGYX8X');
</script>


</head>
<body>
  <header>
    <!-- Menú superior azul -->
    <div class="top-menu">
      <a href="?pag=sobre_nosotros">Sobre nosotros</a>
      <a href="?pag=quiero_ser_agente">Quiero ser vendedor</a>
      <a href=" https://www.google.com/maps/d/u/1/edit?mid=1gerRqZPZbxOs3JlQuXiYnUMIGiLWpvA&usp=sharing" target="_blank">Puntos de venta</a>
      <a href="?pag=aplica_con_nosotros">Aplicá con nosotros</a>
    </div>

    <!-- Cuadro naranja con logo, navegación y botón -->
    <div class="main-header">
      <div class="logo">      
        <a href="login.php">
          <img src="/ImagesSV/logo-02-LOTO.png" alt="Logo" style="cursor:pointer;">
        </a>
      </div>

      <nav class="nav-menu">
        <div class="dropdown">
          <a href="#">JUEGOS ▾</a>
          <div class="dropdown-content">
            <a href="?pag=diaria">La Diaria</a>
            <a href="?pag=super_premio">Loto SuperPremio</a>
            <a href="?pag=instacash">InstaCash</a>
            <a href="?pag=apostemos">Apostemos</a>
  
          </div>
        </div>
        <a href="?pag=noticias">NOTICIAS</a>
        <a href="?pag=contactanos">CONTÁCTANOS</a>
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

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1517228626366116');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1517228626366116&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Google tag (gtag.js) -->
<script async src=""https://www.googletagmanager.com/gtag/js?id=DC-14581472""></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-14581472');
</script>
<!-- End of global snippet: Please do not remove -->

<!--
Event snippet for Loto_Traffic on : Please do not remove.
Place this snippet on pages with events you’re tracking. 
Creation date: 05/21/2025
-->
<script>
  gtag('event', 'conversion', {
    'allow_custom_scripts': true,
    'send_to': 'DC-14581472/invmedia/loto_0+standard'
  });
</script>
<noscript>
<img src=""https://ad.doubleclick.net/ddm/activity/src=14581472;type=invmedia;cat=loto_0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1?"" width=""1"" height=""1"" alt=""""/>
</noscript>
<!-- End of event snippet: Please do not remove -->




</body>
</html>
