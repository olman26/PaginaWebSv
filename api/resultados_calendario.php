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

$fecha = $_GET['fecha'];

$sql = "SELECT TOP 1 par1, par2, par3, par4, par5 
        FROM numeros_ganadores_sorteos_prod 
        WHERE pais = 'El Salvador'
        AND UPPER(LTRIM(RTRIM(game_name))) IN ('LOTO SUPER PREMIO', 'SUPER PREMIO')
        AND CAST(draw_date AS DATE) = :fecha
        AND par1 IS NOT NULL
        ORDER BY draw_date DESC";

$stmt = $conn->prepare($sql);
$stmt->execute(['fecha' => $fecha]);
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