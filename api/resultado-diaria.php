<?php
header('Content-Type: application/json');

$host = "srvdbcacdev.database.windows.net";
$db   = "dblotocacdev";
$user = "LotoAdmin";
$pass = "LotAdmin1.";

try {
    // PDO para SQL Server
    $conn = new PDO("sqlsrv:Server=$host;Database=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta último resultado de Diaria
    $stmt = $conn->query("SELECT TOP 1 * 
                          FROM loto_sorteos_sv 
                          WHERE juego = 1 
                          ORDER BY id DESC");

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo json_encode(["error" => "No hay resultados"]);
        exit;
    }

    $numero = str_pad($row["par1"], 2, "0", STR_PAD_LEFT);

    echo json_encode([
        "digito1" => $numero[0],
        "digito2" => $numero[1],
        "numero"  => $numero,
        "sorteo"  => $row["sorteo"],
        "hora"    => $row["hora"],
        "fecha"   => $row["fecha"]
    ]);

} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
