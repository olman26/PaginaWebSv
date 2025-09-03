<?php include 'header.php'; ?>

<style>
/* ====== ESTILOS PARA DIARIA ====== */
.diaria-page { padding: 40px; max-width: 1000px; margin: 0 auto; text-align: center; }
.diaria-ganador { background: #7dc242; color: white; padding: 25px; border-radius: 15px; margin-bottom: 30px; }
.diaria-ganador h2 { margin-bottom: 15px; }
.diaria-numeros { display: flex; justify-content: center; gap: 15px; margin-bottom: 15px; }
.diaria-numeros span { display: inline-block; background: white; color: #7dc242; font-size: 32px; font-weight: bold; padding: 15px 25px; border-radius: 50%; border: 3px solid #fff; }
.proximo-sorteo { font-weight: bold; font-size: 18px; }
.diaria-anteriores { background: #f5f5f5; border-radius: 12px; padding: 20px; margin-bottom: 30px; }
.diaria-anteriores h3 { color: #003399; margin-bottom: 15px; }
.diaria-resultados p { margin: 5px 0; font-weight: bold; }
.diaria-como-jugar { background: #fff; border: 2px solid #ddd; padding: 25px; border-radius: 12px; }
.diaria-como-jugar h3 { color: #003399; margin-bottom: 10px; }
.btn-reglamento { background: #ff7f00; color: white; border: none; padding: 12px 25px; border-radius: 20px; font-size: 16px; font-weight: bold; cursor: pointer; margin-top: 15px; }
.btn-reglamento:hover { background: #ff5500; }
</style>

<main class="diaria-page">
  <!-- Último número ganador -->
  <section class="diaria-ganador">
    <h2>Último número ganador:</h2>
    <div class="diaria-numeros">
      <span>09</span>
      <span>09</span>
      <span>02</span>
    </div>
    <p class="proximo-sorteo">Próximo sorteo en vivo: 01h 55m : 35s</p>
  </section>

  <!-- Resultados anteriores -->
  <section class="diaria-anteriores">
    <h3>Resultados anteriores</h3>
    <input type="date" />
    <div class="diaria-resultados">
      <p>Sorteo 142: 09 - 13 - 02</p>
      <p>Sorteo 141: 07 - 14 - 03</p>
    </div>
  </section>

  <!-- Cómo jugar -->
  <section class="diaria-como-jugar">
    <h3>Cómo jugar y ganar</h3>
    <p>Selecciona tu número favorito del 00 al 99.  
    Si aciertas, ¡ganas premios instantáneos!</p>
    <button class="btn-reglamento">Leer el reglamento</button>
  </section>
</main>

<?php include 'footer.php'; ?>
