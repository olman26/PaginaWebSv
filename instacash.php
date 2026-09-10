<?php
// ================= CONEXIÓN =================
try {
    $conn = new PDO(
        "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
        "LotoAdmin",
        "LotAdmin1.",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch(PDOException $e){
    die("Error de conexión: " . $e->getMessage());
}
// ================= OBTENER DATOS =================
$stmt = $conn->query("SELECT * FROM paginaweb_sv_instacash WHERE id = 1");
$config = $stmt->fetch(PDO::FETCH_ASSOC);

// Preparar datos del carrusel
$gameData = [];
for($i=1;$i<=11;$i++){
    if(!empty($config["juego{$i}_nombre"]) || !empty($config["juego{$i}_img"])){
        $gameData[] = [
            'title' => $config["juego{$i}_nombre"] ?? "",
            'desc'  => $config["juego{$i}_desc"] ?? "",
            'prize' => $config["juego{$i}_premio"] ?? "",
            'boleto'=> $config["juego{$i}_boleto"] ?? "",
            'img'   => $config["juego{$i}_img"] ?? ""
        ];
    }
}

// ================= ÚLTIMO VIDEO DE PLAYLIST =================
$playlist_id = 'PL2wTM_APd302EeiSBvbVOXsVdXGgGvpHy';
?>

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
      font-family: 'HelveticaRounded', sans-serif;
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

/* ================= RSE VIDEO SECTION ================= */
.rse-video-wrap {
  background: #fff;
  padding: 60px clamp(22px,5vw,90px) 60px;
  font-family: 'HelveticaRounded', Arial, sans-serif;
}
.rse-video-section {
  position: relative; overflow: hidden;
  width: min(920px, 100%); margin: 0 auto;
  background: radial-gradient(circle at 88% 12%, rgba(255,255,255,0.9) 0 58px, transparent 60px),
              linear-gradient(145deg, #fff8f0 0%, #fff 52%, #eef6ff 100%);
  border: 1px solid rgba(255,126,0,0.12); border-radius: 16px;
  padding: 34px clamp(18px,3vw,42px) 40px;
  box-shadow: 0 16px 35px rgba(0,0,0,0.12);
}
.rse-video-section::before {
  content: ""; position: absolute; inset: 18px 18px auto auto;
  width: 120px; height: 120px; border-radius: 50%;
  background: rgba(255,126,0,0.18); pointer-events: none;
}
.rse-video-section::after {
  content: ""; position: absolute; right: -42px; bottom: -42px;
  width: 150px; height: 150px; border-radius: 50%;
  background: rgba(0,74,173,0.18); pointer-events: none;
}
.rse-video-section > * { position: relative; z-index: 1; }
.rse-video-header {
  display: flex; align-items: flex-end;
  justify-content: space-between; gap: 24px; margin-bottom: 28px;
}
.rse-video-header h2 {
  margin: 0; color: #004aad;
  font-size: clamp(26px, 3.2vw, 40px); font-weight: 850; line-height: 1.06;
}
.rse-video-header span {
  color: #ff7e00; font-size: 16px; font-weight: 900;
  text-transform: uppercase; white-space: nowrap;
}
.rse-video-frame {
  position: relative; overflow: hidden; border-radius: 14px; background: #fff;
  aspect-ratio: 16/9; border: 1px solid rgba(0,74,173,0.1);
  box-shadow: 0 16px 35px rgba(0,0,0,0.14);
}
.rse-video-frame iframe { position: absolute; inset: 0; width: 100%; height: 100%; border: 0; }
.rse-youtube-link {
  display: inline-flex; align-items: center; justify-content: center;
  margin-top: 22px; color: #fff; background: #ff0000; border-radius: 999px;
  padding: 12px 22px; font-size: 15px; font-weight: 900; text-decoration: none;
  box-shadow: 0 10px 22px rgba(255,0,0,0.22);
  transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
}
.rse-youtube-link:hover {
  background: #d90000; color: #fff;
  transform: translateY(-2px); box-shadow: 0 14px 28px rgba(255,0,0,0.28);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
    .juego-container-white {flex-direction: column; text-align: center;}
    .carousel-container, .game-info {width: 100%;}
    .rse-video-wrap { padding: 38px 18px 40px; }
    .rse-video-header { display: block; margin-bottom: 20px; }
    .rse-video-header span { display: block; margin-top: 10px; }
    .rse-youtube-link { width: 100%; }
}

/* ===== FIX HEADER INSTACASH SOLO EN MÓVIL ===== */
@media (max-width: 767px) {
  .header {
    padding-top: 330px;
  }
}

</style>
</head>

<body>

<!-- ================= HEADER ================= -->
<div class="header" style="background: url('<?= $config['header_fondo'] ?? 'ImagesSV/fondo instacash.png' ?>'); background-size: cover; background-position: center;">
    <img src="<?= $config['header_logo'] ?? 'ImagesSV/instacash_logo.webp' ?>" alt="InstaCash">
</div>

<!-- ================= TARJETAS ================= -->
<div class="info-boxes">
<?php for($i=1;$i<=3;$i++): ?>
    <div class="info-item card-white">
        <h3><?= htmlspecialchars($config["tarjeta{$i}_titulo"] ?? "Título tarjeta $i") ?></h3>
        <p><?= nl2br(htmlspecialchars($config["tarjeta{$i}_descripcion"] ?? "Descripción tarjeta $i")) ?></p>
    </div>
<?php endfor; ?>
</div>

<!-- ================= SECCIÓN JUEGOS ================= -->
<div class="section-title">
    <img src="ImagesSV/Conocé los juegos.png" alt="Conocé los juegos">
</div>

<div class="juego-container-white">
    <div class="carousel-container">
        <button class="carousel-btn" id="prevBtn">&#10094;</button>
        <button class="carousel-btn" id="nextBtn">&#10095;</button>
        <div class="carousel-track">
            <?php foreach($gameData as $game): ?>
                <div class="carousel-slide">
                    <img src="<?= $game['img'] ?? 'ImagesSV/placeholder.png' ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

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

<!-- ================= SECCIÓN RSE / ÚLTIMO VIDEO ================= -->
<div class="rse-video-wrap">
  <section class="rse-video-section" aria-label="Ultimo video RSE InstaCash">
    <div class="rse-video-header">
      <h2>Descubrí cómo jugar y ganar al instante </h2>
      <span>InstaCash</span>
    </div>
    <div class="rse-video-frame">
      <iframe
        src="https://www.youtube.com/embed/videoseries?list=<?= $playlist_id ?>&rel=0"
        title="Último video de InstaCash"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
      </iframe>
    </div>
    <a class="rse-youtube-link"
       href="https://www.youtube.com/playlist?list=<?= $playlist_id ?>"
       target="_blank" rel="noopener noreferrer">
      Ver más
    </a>
  </section>
</div>

<!-- ================= BOTÓN REGLAMENTO ================= -->
<div style="text-align:center; margin: 40px 0;">
    <?php if(!empty($config['reglamento_pdf'])): ?>
        <a class="btn-reglamento" href="<?= $config['reglamento_pdf'] ?>" download>DESCARGAR REGLAMENTO</a>
    <?php endif; ?>
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
const gameData = <?= json_encode($gameData, JSON_HEX_TAG) ?>;

/* Recalcula el ancho si cambias tamaño de ventana */
function recalc() {
    slideWidth = slides[0] ? slides[0].getBoundingClientRect().width : 0;
    updateCarousel();
}
window.addEventListener('resize', recalc);

function updateCarousel() {
    track.style.transform = `translateX(-${index * 100}%)`;
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
    updateGameInfo(0);
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
<script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "e25e83b5-ef96-41b9-b3d4-a949ffada641",
      host: "https://loteradehonduras-help.freshchat.com",
      widgetUuid: "7bb0713e-e6f3-41d8-945d-9c6d399b2166",
      locale: "es"
    });
  }

  function initialize(i, t) {
    var e;
    i.getElementById(t)
      ? initFreshChat()
      : (
          (e = i.createElement("script")),
          e.id = t,
          e.async = true,
          e.src = "https://loteradehonduras-help.freshchat.com/js/widget.js",
          e.onload = initFreshChat,
          i.head.appendChild(e)
        );
  }

  function initiateCall() {
    initialize(document, "Freshchat-js-sdk");
  }

  window.addEventListener
    ? window.addEventListener("load", initiateCall, false)
    : window.attachEvent("load", initiateCall, false);
</script>
</body>
</html>