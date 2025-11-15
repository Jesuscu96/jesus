<?php

if(isset($_GET["imagen"])){
    $imagen = $_GET["imagen"];
    if( unlink("dirImagenes/{$imagen}")){
        header("location: index.php");
    }
    
}
if ($_FILES["foto"]["error"] > 0){
    echo "Error {$_FILES["foto"]["name"]}<br>";
}else {
    echo "Nombre de la imagen: " . $_FILES["foto"]["error"] . "<br>";
    echo "Tipo: " . $_FILES["foto"]["type"] . "<br>";
    echo "Medida: " . ($_FILES["foto"]["size"] / 1024) . "KB<br>";
    echo "Imagen almacenada en: " . $_FILES["foto"]["tmp_name"];
}
if (file_exists("dirImagenes/{$_FILES["foto"]["name"]}")){
    echo $_FILES["foto"]["name"]. " Ya existe. ";
} else{
    move_uploaded_file($_FILES["foto"]["tmp_name"],"dirImagenes/". $_FILES["foto"]["name"]);
    echo "<br>Imagen almacenada en: " . "dirImagen" . ;
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
    <br>
    <img src ="<?="dirImagenes/" . $_FILES["foto"]["name"]?>" width="150">
    <br>
    <a href="<?="dirImagenes/" . $_FILES["foto"]["name"]?>" download>Descargar</a>
    <br>
    <a href="cargar.php?imagen=<?=$_FILES["foto"]["name"]?>">Eleminar</a>
    <br><a href = "index.php">Inicio</a>
</body>
</html>