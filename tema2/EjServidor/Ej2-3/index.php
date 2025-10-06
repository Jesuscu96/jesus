<?php 

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
    if($imagen !== "." && $imagen !== ".." && !is_dir($file . $imagen)) {?>
        <img src="<?=$file . $imagen?>" width="150"></br>
        <a href="index.php?imagen=<?=$imagen?>">Eleminar</a></br>
        <a href="<?=$file . $imagen?>" download>Descargar</a></br>
        
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