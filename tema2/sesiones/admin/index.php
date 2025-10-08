<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['usuario'])) {
    header ('location: ../index.php');
}

if(!isset($_GET['no_autorizado'])) {
    echo "No autorizado";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "menu.php";?>
    <hr>
    <h2>Bienvenidos a la gestion de DAWAZON</h2>
</body>
</html>
