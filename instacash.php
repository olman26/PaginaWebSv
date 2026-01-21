<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>InstaCash</title>

<style>
/* Definir la fuente HelveticaRounded */
    @font-face {
      font-family: 'HelveticaRounded';
      src: url('fonts/HelveticaRoundedLTStd-Bd.ttf') format('truetype');
      font-weight: bold;
      font-style: normal;
    }

    /* Aplicar la fuente globalmente */
    * {
      font-family: 'HelveticaRounded', sans-serif; /* Cambiar a HelveticaRounded */
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


/* RESET */
* {margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif;}

/* ================= HEADER ================= */
.header {background: url("ImagesSV/fondo instacash.png"); background-size: cover; background-position: center; padding: 90px 0; text-align: center; position: relative; z-index: -10;}
.header img {width: 490px; max-width: 95%; position: relative; z-index: 20;}

/* ================= TARJETAS ================= */
.info-boxes {display: flex; justify-content: center; gap: 20px; padding: 40px 20px; flex-wrap: wrap; margin-top: -60px;}
.info-item {flex: 1 1 320px; min-height: 260px; max-width: 360px; border-radius: 15px; padding: 35px 30px;}
.info-item p {font-size: 17px; line-height: 1.5;}
.info-item h3 {font-size: 22px;}
.info-item.card-white:hover {background-color: #cce7ff; cursor: pointer;}
.card-white {background: #ffffff; border: 3px solid #3db6ff; color: #333333;}
.card-white h3 {color: #3db6ff;}
.card-blue {background: #3db6ff; color: white;}
.card-blue h3 {color: #ffffff;}

/* ================= SECCIÓN JUEGOS ================= */
.section-title {max-width: 1200px; margin: 0 auto; padding: 18px; text-align: center; border-radius: 20px; position: relative; z-index: 50;}
.section-title img {width: 60%; max-width: 700px; height: auto; display: block; margin: 0 auto;}

/* ================= CONTENEDOR COMBO (CARRUSEL + INFO) ================= */
.juego-container {max-width: 1200px; margin: 40px auto; display: flex; gap: 30px; align-items: center; padding: 0 20px;}

/* ================= CARRUSEL ================= */
.carousel-container {width: 50%; position: relative; border-radius: 12px; min-height: 250px; overflow: hidden;}
.carousel-track {display: flex; transition: transform 0.5s ease-in-out; will-change: transform;}
.carousel-slide {min-width: 100%; flex-shrink: 0; display: flex; align-items: center; justify-content: center;}
.carousel-slide img {width: 100%; height: 100%; max-height: 280px; object-fit: contain; display: block; border-radius: 12px; position: relative; z-index: 10;}
.carousel-btn {position: absolute; top: 50%; transform: translateY(-50%); background: #6cc04a; color: #fff; border: none; padding: 12px 15px; font-size: 22px; cursor: pointer; border-radius: 50%; z-index: 20;}
#prevBtn {left: 35px;}
#nextBtn {right: 35px;}
.carousel-btn:hover {background: #58a83c;}

/* ================= INFO DEL JUEGO ================= */
.game-info {width: 45%; text-align: center; background: #f0f8ff; padding: 30px 20px; border-radius: 20px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center; gap: 20px;}
.title-game {font-size: 28px; font-weight: 900; color: #1fa4ff; margin-bottom: 10px;}
.desc-text {font-size: 16px; color: #444; line-height: 1.6; max-width: 400px;}
.premio-row {display: flex; align-items: center; justify-content: center; gap: 30px; flex-wrap: wrap; margin-top: 15px;}
.bold-text {font-size: 16px; font-weight: 600; color: #333;}
.money-text {font-size: 28px; font-weight: 900; color: #1fa4ff; margin: 5px 0;}
.btn-boleto {background: linear-gradient(135deg, #ff9000, #ffb347); padding: 14px 32px; color: white; font-weight: bold; border-radius: 12px; text-decoration: none; font-size: 16px; transition: transform 0.2s, box-shadow 0.2s;}
.btn-boleto:hover {transform: scale(1.05); box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);}
.btn-reglamento {background: #ff9000; padding: 14px 32px; color: white; font-weight: bold; border-radius: 8px; text-decoration: none; font-size: 18px; display: inline-block !important; width: auto !important;}
.btn-reglamento:hover {opacity: 0.9;}

/* ===== CONTENEDOR BLANCO ===== */
.juego-container-white {max-width: 1120px; margin: -15px auto; display: flex; gap: 25px; align-items: center; padding: 30px; background: #ffffff; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.15);}

/* ===== POPUP ===== */
#popup {display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.7); justify-content:center; align-items:center; z-index:1000;}
#popup img {max-width:90%; max-height:90%; border-radius:12px; box-shadow:0 8px 25px rgba(0,0,0,0.3);}
#closePopup {position:absolute; top:20px; right:30px; color:#fff; font-size:40px; font-weight:bold; cursor:pointer;}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
    .juego-container-white {flex-direction: column; text-align: center;}
    .carousel-container, .game-info {width: 100%;}
}

/* ===== FIX HEADER INSTACASH SOLO EN MÓVIL ===== */
@media (max-width: 767px) {
  .header {
    padding-top: 330px; /* ajusta si tu menú es más alto */
  }
}

</style>
</head>

<body>

<!-- ================= HEADER ================= -->
<div class="header">
    <img src="ImagesSV/instacash_logo.webp" alt="InstaCash">
</div>

<!-- ================= TARJETAS ================= -->
<div class="info-boxes">
    <div class="info-item card-white">
        <h3>¿Qué es Instacash?</h3>
        <p>Es la marca de lotería instantánea de LOTO, con la que podrás divertirte con diferentes juegos, que te harán ganar dinero al instante; sin esperar sorteos.</p>
    </div>
    <div class="info-item card-white">
        <h3>¿Cómo se juega?</h3>
        <p>Cada juego tiene su propia mecánica. Podés ganar combinando números, símbolos o palabras según el juego.</p>
    </div>
    <div class="info-item card-white">
        <h3>¿Dónde lo puedo jugar?</h3>
        <p>Lo encontrás en más de 1,800 puntos de venta a nivel nacional.</p>
    </div>
</div>

<!-- ================= SECCIÓN JUEGOS ================= -->
<div class="section-title">
    <img src="ImagesSV/Conocé los juegos.png" alt="Conocé los juegos">
</div>

<!-- ========== COMBO CARRUSEL + INFO ========== -->
<div class="juego-container-white">

    <!-- ===== CARRUSEL ===== -->
    <div class="carousel-container">
        <button class="carousel-btn" id="prevBtn">&#10094;</button>
        <button class="carousel-btn" id="nextBtn">&#10095;</button>

        <div class="carousel-track">
            <div class="carousel-slide"><img src="ImagesSV/LogosInstacash/Artes para sección de web-01.png"></div>
            <div class="carousel-slide"><img src="ImagesSV/LogosInstacash/Artes para sección de web-02.png"></div>
            <div class="carousel-slide"><img src="ImagesSV/LogosInstacash/Artes para sección de web-03.png"></div>
            <div class="carousel-slide"><img src="ImagesSV/LogosInstacash/Artes para sección de web-04.png"></div>
            <div class="carousel-slide"><img src="ImagesSV/LogosInstacash/Artes para sección de web-05.png"></div>
            <div class="carousel-slide"><img src="ImagesSV/LogosInstacash/Artes para sección de web-06.png"></div>
            <div class="carousel-slide"><img src="ImagesSV/LogosInstacash/Artes para sección de web-07.png"></div>
        </div>
    </div>

    <!-- ===== INFO DEL JUEGO ===== -->
    <div class="game-info">
        <div class="title-game"></div>
        <p class="desc-text"></p>
        <div class="premio-row">
            <div>
                <p class="bold-text">Ganá hasta:</p>
                <p class="money-text"></p>
            </div>
            <a class="btn-boleto" href="#">VER BOLETO</a>
        </div>
    </div>
</div>

<div style="text-align:center; margin: 40px 0;">
    <a class="btn-reglamento" href="/ImagesSV/documentos/Reglamento_instacash.pdf" download>DESCARGAR REGLAMENTO</a>
</div>

<!-- POPUP -->
<div id="popup">
  <span id="closePopup">&times;</span>
  <img id="popupImg" src="" alt="Boleto">
</div>

<!-- ================= JS DEL CARRUSEL ================= -->
<script>
const track = document.querySelector('.carousel-track');
const slides = Array.from(document.querySelectorAll('.carousel-slide'));
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let index = 0;
let slideWidth = slides[0] ? slides[0].getBoundingClientRect().width : 0;

/* Datos de cada juego */
const gameData = [
  {title:"Números en Fuego", desc:"Con opción de compra desde $1 hasta $3, es un juego de coincidir números, cada línea se juega por separado.", prize:"$8,000", boleto:"ImagesSV/BolotosInstacash/BOL FUEGO.svg"},
  {title:"Mina de Oro", desc:"Es un juego de sumar números, si la suma total coincide con el número que está dentro de las barras de oro, se gana el premio indicado.", prize:"$3,000", boleto:"ImagesSV/BolotosInstacash/BOL_MINA DE ORO.svg"},
  {title:"Cerdito Bigotón", desc:"Para ganar con Cerdito se debe coincidir algún número con cualquier de la serie ganadora. Además hay un bono extra al coincidir los dos números del bigote.", prize:"$1,000", boleto:"ImagesSV/BolotosInstacash/BOL_CERDITO.svg"},
  {title:"Chocá los 5", desc:"Es un juego en el que se debe coincidir la serie completa con los números ganadores, todas las líneas se juegan por separado.", prize:"$1,500", boleto:"ImagesSV/BolotosInstacash/BOL_CHOCA LOS 5_CHOCA LOS 5 (1).svg"},
  {title:"Boliche", desc:"Es un juego en el que coincidís números y ganás premios si acertas al menos 4. Cuantos más números se acierten, más grande será el premio, según la tabla indicada del boleto.", prize:"$2,500", boleto:"ImagesSV/BolotosInstacash/BOL_BOLICHE.svg"},
  {title:"Árbol Billetón", desc:"Es un juego de encontrar símbolos de billete, se deben encontrar al menos 2 símbolos para comenzar a ganar. Los premios varían según la tabla.", prize:"$1,500", boleto:"ImagesSV/BolotosInstacash/BOL_ARBOL.svg"},
  {title:"Tic Tac Cash", desc:"Es un juego donde podés ganar si lográs formar una línea, ya sea vertical, horizontal o diagonal, combinando los símbolos correctos. El premio depende de la línea que logres armar.", prize:"$2,000", boleto:"ImagesSV/BolotosInstacash/BOL_TIC TAC CASH.svg"}
];

/* recalcula el ancho si cambias tamaño de ventana */
function recalc() {
    slideWidth = slides[0] ? slides[0].getBoundingClientRect().width : 0;
    updateCarousel();
}
window.addEventListener('resize', recalc);

function updateCarousel() {
    track.style.transform = `translateX(-${index * slideWidth}px)`;
}

/* Actualiza info según slide */
function updateGameInfo(i){
    document.querySelector(".title-game").textContent = gameData[i].title;
    document.querySelector(".desc-text").textContent = gameData[i].desc;
    document.querySelector(".money-text").textContent = gameData[i].prize;
}

/* Botones */
nextBtn.addEventListener('click', () => {
    index = (index + 1) % slides.length;
    updateCarousel();
    updateGameInfo(index);
});
prevBtn.addEventListener('click', () => {
    index = (index - 1 + slides.length) % slides.length;
    updateCarousel();
    updateGameInfo(index);
});

/* Inicializa al cargar la página */
window.addEventListener('load', () => {
    recalc();
    updateGameInfo(0); // primera imagen
});

/* ================= POPUP ================= */
const boletoBtn = document.querySelector('.btn-boleto');
const popup = document.getElementById('popup');
const popupImg = document.getElementById('popupImg');
const closePopup = document.getElementById('closePopup');

boletoBtn.addEventListener('click', () => {
    popupImg.src = gameData[index].boleto;
    popup.style.display = "flex";
});

closePopup.addEventListener('click', () => popup.style.display = "none");
popup.addEventListener('click', e => { if(e.target === popup) popup.style.display = "none"; });
</script>

</body>
</html>
