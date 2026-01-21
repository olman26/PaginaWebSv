<?php
header('Content-Type: application/json');

$host = "srvdbcacdev.database.windows.net";
$db   = "dblotocacdev";  // tu base de datos
$user = "LotoAdmin";
$pass = "LotAdmin1.";

try {
    $conn = new PDO("sqlsrv:Server=$host;Database=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

// Recibir fecha desde GET
if (!isset($_GET['fecha'])) {
    echo json_encode(['error' => 'No se proporcionó fecha']);
    exit;
}

$fecha = $_GET['fecha']; // Formato esperado: YYYY-MM-DD

// Solo para juego 2
$juego = 2;

// Consulta: obtener resultado del día seleccionado
$sql = "SELECT par1, par2, par3, par4, par5 
        FROM loto_sorteos_sv 
        WHERE juego = :juego AND CONVERT(date, fecha) = :fecha";

$stmt = $conn->prepare($sql);
$stmt->execute(['juego' => $juego, 'fecha' => $fecha]);
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

if ($resultado) {
    echo json_encode($resultado);
} else {
    echo json_encode([
        'par1' => '00',
        'par2' => '00',
        'par3' => '00',
        'par4' => '00',
        'par5' => '00'
    ]);
}
