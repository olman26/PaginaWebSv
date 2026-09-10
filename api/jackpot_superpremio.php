<?php
header('Content-Type: application/json');

try {
    $conn = new PDO(
        "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
        "LotoAdmin",
        "LotAdmin1.",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // ✅ TRAER EL ÚLTIMO JACKPOT REAL
    $stmt = $conn->prepare("
        SELECT TOP 1 next_jackpot
        FROM numeros_ganadores_sorteos_prod
        WHERE pais = 'El Salvador'
          AND UPPER(game_name) = 'LOTO SUPER PREMIO'
          AND jackpot IS NOT NULL
        ORDER BY draw_date DESC
    ");

    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode([
        "next_jackpot" => $data['next_jackpot'] ?? 0
    ]);

} catch (PDOException $e) {
    echo json_encode([
        "error" => $e->getMessage()
    ]);
}
