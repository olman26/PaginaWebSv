<?php
header('Content-Type: application/json');

$serverName = "srvdbcacdev.database.windows.net";
$database = "dblotocacdev";
$username = "LotoAdmin";
$password = "LotAdmin1.";

try {
    // Conexión a SQL Server
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener el jackpot del último sorteo
    $stmt = $conn->query("SELECT TOP 1 jackpot FROM loto_jackpot_superpremio ORDER BY nsorteo DESC");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    // Devolver JSON
    echo json_encode([
        "jackpot" => $resultado['jackpot'] ?? 0
    ]);

} catch (PDOException $e) {
    // Si hay error en la conexión o la consulta
    echo json_encode([
        "error" => $e->getMessage()
    ]);
}
