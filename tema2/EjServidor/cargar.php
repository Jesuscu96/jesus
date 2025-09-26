<?php
if(isset($_GET["imagen"])){
    $imagen = $_GET["imagen"];
    unlink("dirImagenes/{$imagen}");
}
if ($_FILES["foto"]["error"] > 0){
    echo "Error {$_FILES["foto"]["name"]}<br>";
}else {
    
}
if (file_exists("dirImagenes/{$_FILES["foto"]["name"]}")){
    echo $_FILES["foto"]["name"]. " Ya existe. ";
}else{
    move_uploaded_file($_FILES["foto"]["name"],"dirImagenes/". $_FILES["foto"]["name"]);
    echo "<br>Imagen almacenada en: " . "dirImagen" . $_FILES["foto"]["name"];
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
    <!-- <form method="post" action="">
                
        <select name="Productos1">
            <option value="tv">Tv</option>
            <option value="monitor">Monitor</option>
            <option value="altavoces">Altavoces</option>
        </select>
                
            
        <p><input type="submit" name="comprar" value="comprar"></p>
            
    </form> -->
</body>
</html>