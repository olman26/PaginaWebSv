<?php 
include 'includes/header.php';
//include 'includes/nav.php';

$pag = "";
if(isset($_GET['pag'])){
    $pag = $_GET['pag'];
}
switch ($pag) {
    case 'agregarPorveedor':
        include 'paginas/agregarPorveedor.php';
    break;

    default:
        include 'includes/body.php';
    break;
}
include 'includes/footer.php';
?>