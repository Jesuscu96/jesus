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
    if (isset($_GET['link'])){
        $libro = "link";
        $comida = "link";
        $pelicula = "link";
    }
    ?>
    <h1>Ejercicio 2.</h1>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="uno.php?link=<?= $libro ?>">Mi libro favorito</a></li>
        <li><a href="dos.php?link=<?= $comida ?>">Mi comida favorita</a></li>
        <li><a href="tres.php?link=<?= $pelicula ?>">Mi película favorita</a></li>

    </ul>
</body>
</html>