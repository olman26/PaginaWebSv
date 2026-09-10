<?php
header('Content-Type: application/json');

$host = "srvdbcacdev.database.windows.net";
$db   = "dblotocacdev";
$user = "LotoAdmin";
$pass = "LotAdmin1.";

try {
    $conn = new PDO("sqlsrv:Server=$host;Database=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

if (!isset($_GET['fecha'])) {
    echo json_encode(['error' => 'No se proporcionó fecha']);
    exit;
}

$fecha = $_GET['fecha']; // espera formato YYYY-MM-DD
$juego = 1; // DIARIA

$sql = "
SELECT 
    DATEPART(HOUR, hora) AS hora_sorteo,
    par1
FROM loto_sorteos_sv
WHERE juego = :juego
AND fecha = :fecha
";

$stmt = $conn->prepare($sql);
$stmt->execute([
    'juego' => $juego,
    'fecha' => $fecha
]);

$resultados = [
    '11:00' => null,
    '18:00' => null,
    '21:00' => null
];

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $hora = $row['hora_sorteo'];
    if ($hora == 11) {
        $resultados['11:00'] = str_pad($row['par1'], 2, '0', STR_PAD_LEFT);
    } elseif ($hora == 18) {
        $resultados['18:00'] = str_pad($row['par1'], 2, '0', STR_PAD_LEFT);
    } elseif ($hora == 21) {
        $resultados['21:00'] = str_pad($row['par1'], 2, '0', STR_PAD_LEFT);
    }
}

echo json_encode($resultados);
 