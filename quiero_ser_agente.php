<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$mensajeExito = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recibir los datos del formulario
    $Nombre = $_POST['Nombre'] ?? null;
    $Apellidos = $_POST['Apellidos'] ?? null;
    $Identidad = $_POST['Identidad'] ?? null;
    $Telefono = $_POST['Telefono'] ?? null;
    $Correo = $_POST['Correo'] ?? null;

    $Negocio = $_POST['Negocio'] ?? null;
    $Direccion = $_POST['Direccion'] ?? null;
    $TipoNegocio = $_POST['TipoNegocio'] ?? null;
    $Departamento = $_POST['Departamento'] ?? null;
    $Ciudad = $_POST['Ciudad'] ?? null;
    $Municipio = $_POST['Municipio'] ?? null;
    $Barrio = $_POST['Barrio'] ?? null;

    // Si tienes foto como URL o base64
   $FotoNegocio = null;

if (!empty($_FILES['FotoNegocio']['tmp_name'])) {

    $extension = pathinfo($_FILES['FotoNegocio']['name'], PATHINFO_EXTENSION);
    $nombreArchivo = uniqid("negocio_") . "." . $extension;

    // Ruta física donde se guarda el archivo
    $rutaDestino = "ImagesSV/uploads/agentes/" . $nombreArchivo;

    move_uploaded_file($_FILES['FotoNegocio']['tmp_name'], $rutaDestino);

    // Esto es lo que se guarda en la BD y se envía a la Logic App
    $FotoNegocio = $rutaDestino;
}

    try {
        //  Guardar en SQL Server
        $conn = new PDO(
            "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
            "LotoAdmin",
            "LotAdmin1.",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        $sql = "INSERT INTO quiero_ser_agente_sv 
                (Nombre, Apellidos, Identidad, Telefono, Correo, Negocio, Direccion, TipoNegocio, Departamento, Ciudad, Municipio, Barrio, FotoNegocio)
                VALUES 
                (:Nombre, :Apellidos, :Identidad, :Telefono, :Correo, :Negocio, :Direccion, :TipoNegocio, :Departamento, :Ciudad, :Municipio, :Barrio, :FotoNegocio)";

        $stmt = $conn->prepare($sql);

        $stmt->execute([
            ':Nombre' => $Nombre,
            ':Apellidos' => $Apellidos,
            ':Identidad' => $Identidad,
            ':Telefono' => $Telefono,
            ':Correo' => $Correo,
            ':Negocio' => $Negocio,
            ':Direccion' => $Direccion,
            ':TipoNegocio' => $TipoNegocio,
            ':Departamento' => $Departamento,
            ':Ciudad' => $Ciudad,
            ':Municipio' => $Municipio,
            ':Barrio' => $Barrio,
            ':FotoNegocio' => $FotoNegocio
        ]);

        //  Enviar los datos a Logic App
        $logicAppUrl = "https://prod-21.canadacentral.logic.azure.com:443/workflows/35394d22c95147bd8fa955926a9b5ff2/triggers/When_an_HTTP_request_is_received/paths/invoke?api-version=2016-10-01&sp=%2Ftriggers%2FWhen_an_HTTP_request_is_received%2Frun&sv=1.0&sig=d9Eo7PIHW2ELfGPfd-OHWzlQEy8KeKYY6uZOEJH5CGo";

        $data = [
            "Nombre" => $Nombre,
            "Apellidos" => $Apellidos,
            "Identidad" => $Identidad,
            "Telefono" => $Telefono,
            "Correo" => $Correo,
            "Negocio" => $Negocio,
            "Direccion" => $Direccion,
            "TipoNegocio" => $TipoNegocio,
            "Departamento" => $Departamento,
            "Ciudad" => $Ciudad,
            "Municipio" => $Municipio,
            "Barrio" => $Barrio,
            "FotoNegocio" => $FotoNegocio
        ];

        $ch = curl_init($logicAppUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode >= 200 && $httpCode < 300) {
            $mensajeExito = "✅ Formulario enviado correctamente y Logic App ejecutada.";
        } else {
            $mensajeExito = "⚠️ Formulario guardado, pero hubo un problema enviando la Logic App. HTTP code: $httpCode";
        }

    } catch (PDOException $e) {
        $mensajeExito = "❌ Error al guardar en SQL: " . $e->getMessage();
    }
}

echo $mensajeExito;
?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Vendedor</title>
<style>
  body {
  font-family: 'HelveticaRounded', sans-serif; /* Aplicar la fuente personalizada */
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
    position: relative;   /* habilita z-index */
  z-index: 10;          /* lo trae al frente */
  margin-top: -50px;   /* lo sube encima del hero */
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
  .requisitos img { max-width: 200px; border-radius: 12px; }

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
      <img src="ImagesSV/Quiero ser agente loto (1).png" alt="Equipo Ganador" class="hero-text-img">
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
        <li>NEGOCIO O PERSONA NATURAL.</li>
        <li>CONTAR CON NÚMERO DE DUI HOMOLOGADO.</li>
        <li>UBICACIÓN EN ZONAS DE ALTO TRÁFICO.</li>
        <li>GRAN AFLUENCIA DE CLIENTES EN EL NEGOCIO.</li>
        <li>ESPACIO EN PRIMERA POSICIÓN PARA PONER LA TERMINAL DE VENTA.</li>
        <li>DESIGNAR ESPACIO PARA PUBLICIDAD.</li>
        <li>FIRMA DE CONTRATO.</li>
      </ul>
      <img src="ImagesSV/Imagen requisitos.png" alt="Ilustración Requisitos">
    </div>
  </section>

  <!-- FORMULARIO -->
  <section class="form-container">
    <form method="POST" action="" enctype="multipart/form-data">

      <h2 class="form-section-title">Ingresar información del propietario del negocio</h2>
      <div class="form-grid">
        <div class="form-group"><label>Nombre</label><input type="text" name="Nombre" placeholder="Nombre" required></div>
        <div class="form-group"><label>Apellidos</label><input type="text" name="Apellidos" placeholder="Apellidos" required></div>
        <div class="form-group"><label>Número de Identidad</label><input type="text" name="Identidad" placeholder="Número de Identidad" required></div>
        <div class="form-group"><label>Teléfono</label><input type="tel" name="Telefono" placeholder="Teléfono" required></div>
        <div class="form-group"><label>Correo Electrónico</label><input type="email" name="Correo" placeholder="Correo Electrónico" required></div>
      </div>

      <h2 class="form-section-title">Ingresar información del negocio</h2>
      <div class="form-grid">
        <div class="form-group"><label>Nombre del negocio</label><input type="text" name="Negocio" placeholder="Nombre del negocio" required></div>
        <div class="form-group"><label>Dirección actual del negocio</label><input type="text" name="Direccion" placeholder="Dirección del negocio" required></div>
        <div class="form-group"><label>Tipo de negocio</label>
          <select name="TipoNegocio" required>
            <option value="">Seleccione</option>
            <option value="Tienda">Tienda</option>
            <option value="Mercadito">Mercadito</option>
            <option value="Farmacia">Farmacia</option>
          </select>
        </div>
        <input type="file" name="FotoNegocio" accept="image/*" required>
        <div class="form-group"><label>Departamento</label>
          <select name="Departamento" required>
  <option value="">Seleccione Departamento</option>
  <option value="Ahuachapán">Ahuachapán</option>
  <option value="Cabañas">Cabañas</option>
  <option value="Chalatenango">Chalatenango</option>
  <option value="Cuscatlán">Cuscatlán</option>
  <option value="La Libertad">La Libertad</option>
  <option value="La Paz">La Paz</option>
  <option value="La Unión">La Unión</option>
  <option value="Morazán">Morazán</option>
  <option value="San Miguel">San Miguel</option>
  <option value="San Salvador">San Salvador</option>
  <option value="San Vicente">San Vicente</option>
  <option value="Santa Ana">Santa Ana</option>
  <option value="Sonsonate">Sonsonate</option>
  <option value="Usulután">Usulután</option>
</select>

        </div>
        <div class="form-group"><label>Ciudad</label><input type="text" name="Ciudad" placeholder="Ciudad" required></div>
        <div class="form-group"><label>Municipio</label><input type="text" name="Municipio" placeholder="Municipio" required></div>
        <div class="form-group"><label>Barrio / Colonia</label><input type="text" name="Barrio" placeholder="Barrio / Colonia" required></div>
      </div>

      <button type="submit" class="btn-submit">Enviar mensaje</button>
    </form>
  </section>

  <!-- BENEFICIOS -->
  <h2 class="beneficios-title">BENEFICIOS</h2>
  <section class="beneficios-container">
    <div class="beneficio"><img src="ImagesSV/icono comision.svg"><div class="beneficio-text"><h4>CERO INVERSIÓN Y BAJOS COSTOS OPERATIVOS</h4><p>Olvídate del inventario y vencimiento del
producto.
</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono asesoria.svg"><div class="beneficio-text"><h4>ASESORÍAS</h4><p>Orientación permanente para el desarrollo de tu negocio para incrementar tus ventas de lotería electrónica por medio de nuestro equipo de Asesores Comerciales</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono incentivos.svg"><div class="beneficio-text"><h4>PROMOCIONES</h4><p>Podrás ser parte de nuestras actividades y dinámicas a lo largo del año.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono trafico.svg"><div class="beneficio-text"><h4>AFLUENCIA DE PERSONAS EN TU TIENDA O NEGOCIO</h4><p>Gracias a Loto y sus novedosos juegos, podrás atraer nuevos clientes a tu negocio.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono publicidad.svg"><div class="beneficio-text"><h4>PUBLICIDAD</h4><p>Contarás con publicidad en tu punto de venta para que los clientes te identifiquen como parte de la exclusiva red de vendedores Loto en el país.</p></div></div>
    <div class="beneficio"><img src="ImagesSV/icono ayuda.svg"><div class="beneficio-text"><h4>ASISTENCIA Y MANTENIMIENTO</h4><p>La instalación y mantenimiento de la terminal es gratuita, así como el abastecimiento de papel para la impresión de boletos.</p></div></div>
  </section>

</div>
</body>
</html>
