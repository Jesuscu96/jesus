<?php 
//Ejercicio 5. Crea un archivo llamado tareas.txt que almacene una lista de tareas. 
//Luego, crea un script que agregue nuevas tareas al archivo y muestre la lista completa.
$file = "portadas/";
$imagenes = scandir($file);
if(isset($_GET["imagen"])){
    $imagen = $_GET["imagen"];
    if( unlink("portadas/{$imagen}")){
        header("location: index.php");
    }
    
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
    <a href = "index.php">Inicio</a>
    <br>
    
    
    <?php
    foreach($imagenes as $imagen) : 
    if($imagen !== "." && $imagen !== "..") {?>
        <img src="<?=$file . $imagen?>" width="150">
        <a href="index.php?imagen=<?=$imagen?>">Eleminar</a>
        <br>
    <?php
    
   
    }
    endforeach; ?>
    
    <?php
    /*$imagen = "foto.JPG";

    if (preg_match('/\.(jpg|jpeg|png)$/i', $imagen)) {
        echo "Es una imagen válida";
    } else {
        echo "No es una imagen válida";
    } */
    ?>
    
</body>
</html>