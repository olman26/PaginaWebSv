<?php
header('Content-Type: application/json');

$conn = new PDO(
  "sqlsrv:Server=srvdbcacdev.database.windows.net;Database=dblotocacdev",
  "LotoAdmin",
  "LotAdmin1.",
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$fecha = $_GET['fecha'] ?? date('Y-m-d');

$sql = "
SELECT
  CAST(draw_date AS time) AS hora,
  par1
FROM numeros_ganadores_sorteos_prod
WHERE
  pais = 'El Salvador'
  AND UPPER(LTRIM(RTRIM(game_name))) = 'DIARIA'
  AND CAST(draw_date AS date) = :fecha
  AND par1 IS NOT NULL
  AND par1 <> 0
";

$stmt = $conn->prepare($sql);
$stmt->execute(['fecha'=>$fecha]);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$rows) {
  $sqlFallback = "
  SELECT
    hora,
    par1
  FROM loto_sorteos_sv
  WHERE
    juego = 1
    AND CAST(fecha AS date) = :fecha
    AND par1 IS NOT NULL
    AND par1 <> 0
  ";

  $stmtFallback = $conn->prepare($sqlFallback);
  $stmtFallback->execute(['fecha'=>$fecha]);
  $rows = $stmtFallback->fetchAll(PDO::FETCH_ASSOC);
}

$resultados = ['11'=>null,'18'=>null,'21'=>null];

foreach($rows as $r){
  $h = substr($r['hora'],0,2);

  // 10:58 → 11 AM
  if($h >= '10' && $h < '12') $resultados['11']=$r;

  if($h >= '17' && $h < '19') $resultados['18']=$r;

  if($h >= '20' && $h < '22') $resultados['21']=$r;
}

echo json_encode($resultados);
 