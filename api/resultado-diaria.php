<?php

header('Content-Type: application/json; charset=utf-8');

try {

    $conn = new PDO(
        "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
        $user = "LotoAdmin",
        $pass = "LotAdmin1.",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

} catch (PDOException $e) {

    http_response_code(500);

    echo json_encode([
        'error' => 'Error de conexión'
    ]);

    exit;
}


/* =========================
   FECHA DEL CALENDARIO
========================= */

$fecha = $_GET['fecha'] ?? null;

if (!$fecha || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {

    http_response_code(400);

    echo json_encode([
        'error' => 'Fecha inválida'
    ]);

    exit;
}


/*
    HORARIOS EN SQL SERVER

    Sorteo 11:00 AM El Salvador
    DB = mismo día aproximadamente 16:58

    Sorteo 9:00 PM El Salvador
    DB = día siguiente aproximadamente 02:58
*/

$diaSiguiente = date(
    'Y-m-d',
    strtotime($fecha . ' +1 day')
);


/* =========================
   RESULTADO 11 AM
========================= */

$sql11 = "
SELECT TOP 1
    draw_number,
    draw_date,
    result_raw
FROM dbo.numeros_ganadores_sorteos_prod
WHERE pais = N'El Salvador'
  AND UPPER(LTRIM(RTRIM(game_name))) = N'DIARIA'
  AND CAST(draw_date AS date) = CAST(:fecha AS date)
  AND DATEPART(HOUR, draw_date) = 16
  AND result_raw IS NOT NULL
  AND LTRIM(RTRIM(result_raw)) <> ''
ORDER BY draw_date ASC
";

$stmt11 = $conn->prepare($sql11);

$stmt11->execute([
    'fecha' => $fecha
]);

$r11 = $stmt11->fetch(PDO::FETCH_ASSOC);


/* =========================
   RESULTADO 9 PM
========================= */

$sql21 = "
SELECT TOP 1
    draw_number,
    draw_date,
    result_raw
FROM dbo.numeros_ganadores_sorteos_prod
WHERE pais = N'El Salvador'
  AND UPPER(LTRIM(RTRIM(game_name))) = N'DIARIA'
  AND CAST(draw_date AS date) = CAST(:fecha AS date)
  AND DATEPART(HOUR, draw_date) = 2
  AND result_raw IS NOT NULL
  AND LTRIM(RTRIM(result_raw)) <> ''
ORDER BY draw_date ASC
";

$stmt21 = $conn->prepare($sql21);

$stmt21->execute([
    'fecha' => $diaSiguiente
]);

$r21 = $stmt21->fetch(PDO::FETCH_ASSOC);


/* =========================
   ARMAR RESPUESTA
========================= */

$resultados = [
    '11' => null,
    '21' => null
];


/* 11 AM */

if ($r11) {

    $numero = trim((string)$r11['result_raw']);

    $resultados['11'] = [
        'par1' => str_pad(
            $numero,
            2,
            '0',
            STR_PAD_LEFT
        ),
        'draw_number' => $r11['draw_number'],
        'draw_date' => $r11['draw_date']
    ];
}


/* 9 PM */

if ($r21) {

    $numero = trim((string)$r21['result_raw']);

    $resultados['21'] = [
        'par1' => str_pad(
            $numero,
            2,
            '0',
            STR_PAD_LEFT
        ),
        'draw_number' => $r21['draw_number'],
        'draw_date' => $r21['draw_date']
    ];
}


echo json_encode(
    $resultados,
    JSON_UNESCAPED_UNICODE
);