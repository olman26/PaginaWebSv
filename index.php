<?php 
include 'includes/header.php';

$pag = "";
if(isset($_GET['pag'])){
    $pag = $_GET['pag'];
}
switch ($pag) {
    
    case 'diaria':
        include 'diaria.php';
    break;

    case 'quiero_ser_agente':
        include 'quiero_ser_agente.php';
    break;

    case 'noticias':
        include 'noticias.php';
    break;

    case 'apostemos':
        include 'apostemos.php';
    break;

    case 'aplica_con_nosotros':
        include 'aplica_con_nosotros.php';
    break;
     case 'contactanos':
        include 'contactanos.php';
    break;
    case 'sobre_nosotros':
        include 'sobre_nosotros.php';
    break;

    default:
        include 'includes/body.php';
    break;
}

include 'includes/footer.php';
?>
