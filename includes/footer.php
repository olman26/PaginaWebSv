<style>
/* =========================
   SOLO FIX PARA TELÉFONOS
   ========================= */
@media (max-width: 768px) {

  .footer {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* LOGO PRINCIPAL */
  .footer-left {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .footer-left img {
    transform: scale(2) !important; /* mantiene tamaño grande pero controlado */
    margin: 0 !important;
  }

  /* COLUMNAS */
  .footer-right {
    width: 100%;
  }

  .footer-columns {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center; /* 🔥 centra Juegos, Nosotros, Secciones */
    gap: 20px;
  }

  .footer-column {
    width: 100%;
  }

  .footer-column h3 {
    text-align: center;
  }

  .footer-column p {
    text-align: center;
  }

  /* LOGO +18 */
  .footer-logos {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  /* REDES SOCIALES */
  .social-icons {
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 20px;
  }
}

@media (max-width: 768px) {

  .footer-extra-logo {
    max-width: 70px;     
    width: 100%;
    height: auto;
  }

  .footer-logos {
    display: flex;
    justify-content: center;
    align-items: center;
  }
}


</style>

<div class="footer">
  <div class="footer-left">
   <img src="/ImagesSV/juegosdeloteria.png" alt="Logo" class="footer-logo"
     style="transform: scale(2.5) translateX(40px); margin-top: -12px;">



  </div>

  <div class="footer-right">
    <div class="footer-columns">
      <div class="footer-column">
        <h3>Juegos</h3>
        <p>
          <a href="index.php?pag=diaria" style="color: inherit; text-decoration: none;">
        Diaria
      </a>
    </p>
        
        <p>
      <a href="index.php?pag=super_premio" style="color: inherit; text-decoration: none;">
        SuperPremio
      </a>
    </p>
        <p>
      <a href="index.php?pag=instacash" style="color: inherit; text-decoration: none;">
        InstaCash
      </a>
    </p>
         <p>
      <a href="index.php?pag=apostemos" style="color: inherit; text-decoration: none;">
        Apostemos
      </a>
    </p>
        
      </div>

      <div class="footer-column">
        <h3>Nosotros</h3>
        <p>
        <a href="index.php?pag=aplica_con_nosotros" style="color: inherit; text-decoration: none;">
        Aplicá con nosotros
      </a>
      </p>
        <p>
        <a href="index.php?pag=quiero_ser_agente" style="color: inherit; text-decoration: none;">
        Quiero ser vendedor
      </a>
        </p>
       <p>
  <a href="https://www.google.com/maps/d/viewer?mid=1gerRqZPZbxOs3JlQuXiYnUMIGiLWpvA&ll=0%2C0&z=9" target="_blank" style="color: inherit; text-decoration: none;">
    Puntos de venta
  </a>
</p>

      </div>

      <div class="footer-column">
        <h3>Secciones</h3>
        <p>
        <a href="index.php?pag=noticias" style="color: inherit; text-decoration: none;">
        Noticias
      </a>
      </p>
        <p>
      <a href="index.php?pag=contactanos" style="color: inherit; text-decoration: none;">
        Contáctanos
      </a>
    </p>
      </div>
    </div>
  </div>

  <!-- Logos totalmente a la derecha -->
  <div class="footer-logos">
     <!-- <img src="/ImagesSV/Logo ESR.png" alt="Logo ESR" class="footer-extra-logo"> -->
    <img src="/ImagesSV/18 años png.png" alt="Logo Loto 21" class="footer-extra-logo">
  </div>

  <div class="social-icons">
  <a href="https://www.tiktok.com/@lotoelsalvador" target="_blank">
    <img src="/ImagesSV/tik-tok.svg" alt="TikTok">
  </a>
  <a href="https://www.instagram.com/Lotoelsalvador/" target="_blank">
    <img src="/ImagesSV/instagram.svg" alt="Instagram">
  </a>
  <a href="https://www.facebook.com/LotoElSalvador/" target="_blank">
    <img src="/ImagesSV/facebook.svg" alt="Facebook">
  </a>
 <!-- <a href="https://x.com/LotoElSalvador" target="_blank">
    <img src="/ImagesSV/Twitter.svg" alt="Twitter">
  </a>   -->
  <a href="https://www.youtube.com/results?search_query=loto+el+salvador" target="_blank">
    <img src="/ImagesSV/Youtube.svg" alt="Youtube">
  </a>
  <a href="https://sv.linkedin.com/company/lotoeselsalvador" target="_blank">
    <img src="/ImagesSV/linkedin.svg" alt="LinkedIn">
  </a>
</div>

</div>
