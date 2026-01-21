<?php
header('Content-Type: application/json');

$host = "srvdbcacdev.database.windows.net";
$db   = "dblotocacdev";
$user = "LotoAdmin";
$pass = "LotAdmin1.";

try {
    $conn = new PDO("sqlsrv:server=$host;Database=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Tomamos solo el último sorteo del juego 2 (Super Premio)
    $stmt = $conn->prepare("SELECT TOP 1 * FROM loto_sorteos_sv WHERE juego = 2 ORDER BY id DESC");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row){
        echo json_encode([
            "par1" => str_pad($row["par1"], 2, "0", STR_PAD_LEFT),
            "par2" => str_pad($row["par2"], 2, "0", STR_PAD_LEFT),
            "par3" => str_pad($row["par3"], 2, "0", STR_PAD_LEFT),
            "par4" => str_pad($row["par4"], 2, "0", STR_PAD_LEFT),
            "par5" => str_pad($row["par5"], 2, "0", STR_PAD_LEFT)
        ]);
    } else {
        echo json_encode(["error" => "No hay resultados"]);
    }

} catch(PDOException $e){
    echo json_encode(["error" => $e->getMessage()]);
}
