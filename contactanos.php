<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$mensajeExito = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    try {
        $conn = new PDO(
            "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
            "LotoAdmin",
            "LotAdmin1.",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        $sql = "INSERT INTO contactanos_sv (nombre, correo, asunto, mensaje)
                VALUES (:nombre, :correo, :asunto, :mensaje)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nombre'  => $_POST['nombre'],
            ':correo'  => $_POST['correo'],
            ':asunto'  => $_POST['asunto'],
            ':mensaje' => $_POST['mensaje']
        ]);

        // ===== LLAMAR LOGIC APP =====
        $logicAppUrl = "https://prod-16.canadacentral.logic.azure.com:443/workflows/dcb005e10f144cdbb81f91672f4127b9/triggers/When_an_HTTP_request_is_received/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2FWhen_an_HTTP_request_is_received%2Frun&sv=1.0&sig=T3Nx2FS1LQdRDKtocoeWf4HAnHsPCf7S_vgrfqyWASY";

        $data = [
            "nombre"  => $_POST['nombre'],
            "correo"  => $_POST['correo'],
            "asunto"  => $_POST['asunto'],
            "mensaje" => $_POST['mensaje']
        ];

        $ch = curl_init($logicAppUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_exec($ch);
        curl_close($ch);
        // ===== FIN LOGIC APP =====

        $mensajeExito = "Mensaje enviado correctamente ✅";

    } catch (PDOException $e) {
        $mensajeExito = "Error: " . $e->getMessage();
    }
}
?>
<?php
try {
    $conn = new PDO(
        "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
        "LotoAdmin",
        "LotAdmin1.",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $sqlLoto = "SELECT texto FROM paginaweb_sv_contactanos_acordeon ORDER BY id DESC";
    $stmtLoto = $conn->query($sqlLoto);
    $lotocentros = $stmtLoto->fetchAll(PDO::FETCH_ASSOC);

    // OBTENER MAPA DESDE CONFIG
$sqlMapa = "SELECT mapa_url FROM paginaweb_sv_config WHERE id = 1 AND secciones = 'mapa_contactanos'" ;
$stmtMapa = $conn->query($sqlMapa);
$mapa = $stmtMapa->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $lotocentros = []; // evita que producción se rompa
}
?>

<!DOCTYPE html>  
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loto - Lotocentros</title>

<style>
@font-face {
    font-family: 'HelveticaRounded';
    src: url('fonts/HelveticaRoundedLTStd-Bd.ttf') format('truetype'); /* Ruta relativa al archivo de la fuente */
    font-weight: bold;
    font-style: normal;
}

 body {
  margin: 0;
   font-family: 'HelveticaRounded', Arial, sans-serif;  /* Mantén la fuente personalizada aquí */
  color: #333;
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
  content: "▼";
  position: absolute;
  right: 20px;
  font-size: 18px;
}

.accordion.active:after {
  content: "▲";
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

/* FORMULARIO ESTILO SIMPLE */
.contact .info-text {
  text-align: center;
  color: #0b52c3;
  font-weight: 700;
  font-size: 14px;
  margin-bottom: 15px;
}

.contact form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.contact input,
.contact textarea {
  width: 100%;
  max-width: 500px;
  padding: 10px 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  transition: border-color 0.3s ease;
  box-sizing: border-box;
  margin: 0 auto;
  display: block;
}

.contact input:focus, .contact textarea:focus {
  border-color: #0b52c3;
  outline: none;
}

.contact .submit-button {
  background: #0b52c3;
  color: #fff;
  border: none;
  padding: 12px 0;
  border-radius: 8px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  width: 200px;
  display: block;
  margin: 10px auto 0 auto;
}

.contact .submit-button:hover {
  background: #093e8c;
  transform: translateY(-2px);
}

/* Viñeta de éxito */
.alert-success {
  background-color: #d4edda;
  border-left: 6px solid #28a745;
  color: #155724;
  padding: 12px 20px;
  border-radius: 8px;
  margin-bottom: 15px;
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  font-weight: bold;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  animation: fadeIn 0.5s ease-in-out;
}

/* Animación opcional */
@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

/* RESPONSIVE */
@media (max-width: 767px) {
  .offices-contact {
    flex-direction: column;
  }
}

@media (max-width: 767px) {
  .map-section {
    padding-top: 70px; /* Ajusta este valor */
  }
}
</style>
</head>

<body>

<div class="container">

  <!-- MAPA -->
  <div class="map-section">
    <h2>LOTOCENTROS A NIVEL NACIONAL</h2>
    <?php if(!empty($mapa['mapa_url'])): ?>

<img src="<?= $mapa['mapa_url'] ?>?v=<?= time(); ?>" alt="Mapa">

<?php else: ?>

<img src="ImagesSV/Mapa Loto.SV.svg" alt="Mapa">

<?php endif; ?>

    <button class="accordion">VER HORARIOS</button>

    <div class="panel">
    <?php foreach ($lotocentros as $loto): ?>
        <p>
            <?= htmlspecialchars($loto['texto'] ?? '') ?>
        </p>
    <?php endforeach; ?>
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

      <?php if ($mensajeExito): ?>
  <div class="alert-success" id="alert-success">
    <?= $mensajeExito ?>
  </div>
<?php endif; ?>
      <form method="post">
        <input type="text" name="nombre" placeholder="Nombre completo *" required>
        <input type="email" name="correo" placeholder="Correo electrónico *" required>
        <input type="text" name="asunto" placeholder="Asunto *" required>
        <textarea name="mensaje" rows="5" placeholder="Mensaje *" required></textarea>
        <button type="submit" class="submit-button">Enviar</button>
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

<script>
  // Selecciona la viñeta
  const alertBox = document.getElementById('alert-success');

  if (alertBox) {
    // Después de 5 segundos, desaparece
    setTimeout(() => {
      alertBox.style.opacity = '0';       // hacemos fade out
      alertBox.style.transition = 'opacity 0.5s ease';
      setTimeout(() => {
        alertBox.remove();               // eliminamos el elemento del DOM
      }, 500); // espera la transición antes de remover
    }, 5000); // 5000 ms = 5 segundos
  }

  if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
  }
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





