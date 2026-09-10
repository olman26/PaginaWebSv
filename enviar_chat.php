
<?php

header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$nombre = $data["nombre"] ?? "";
$correo = $data["correo"] ?? "";
$opcion = $data["opcion"] ?? "";

$apiKey = "PON_AQUI_TU_API_KEY_SENDGRID";

$body = [
    "personalizations" => [[
        "to" => [[
            "email" => "omartinez@loto.hn"
        ]]
    ]],

    "from" => [
        "email" => "noreply@loto.hn"
    ],

    "subject" => "Nuevo chat asignado",

    "content" => [[
        "type" => "text/plain",
        "value" =>
"Nuevo chat recibido

Nombre: $nombre

Correo: $correo

Opción: $opcion"
    ]]
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . $apiKey,
    "Content-Type: application/json"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

if($httpcode == 202){

    echo json_encode([
        "success" => true,
        "message" => "Correo enviado correctamente"
    ]);

}else{

    echo json_encode([
        "success" => false,
        "message" => $response
    ]);

}
?>

