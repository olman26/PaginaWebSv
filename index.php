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

    default:
        include 'includes/body.php';
    break;
}

include 'includes/footer.php';
?>
