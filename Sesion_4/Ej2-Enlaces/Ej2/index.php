<?php
//Mostrar errores
ini_set('displays_errors');
error_reporting(E_ALL); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4ªSesión: Paso de variables (Enlaces) parte 2 </title>
</head>
<body>
    <?php
    $libro = "El Principito";
    $comida = "Paella";
    $pelicula = "Gran Torino";
    if (isset($_GET['lib'])):
        echo "Mi libro favorita es <b> {$_GET["lib"]}</b> <br>";
    elseif (isset($_GET['comi'])):
        echo "Mi comida favorita es <b> {$_GET["comi"]}</b> <br>";
    elseif (isset($_GET['peli'])):
        echo "Mi comida pelicula es <b> {$_GET["peli"]}</b> <br>";
    else:

    ?>
    <h1>Ejercicio 2.</h1>
    <ul>
        <li><a href="index.php?lib=<?= $libro ?>">Mi libro favorito</a></li>
        <li><a href="index.php?comi=<?= $comida ?>">Mi comida favorita</a></li>
        <li><a href="index.php?peli=<?= $pelicula ?>">Mi película favorita</a></li>

    </ul>
    <?php
    endif;
    if (isset($_GET['lib']) || isset($_GET['comi']) || isset($_GET['peli'])):
        echo '<li><a href="index.php">Volver</a></li>';
    endif;
    ?>
</body>
</html>