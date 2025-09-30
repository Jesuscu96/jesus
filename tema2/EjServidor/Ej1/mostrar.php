<?php 

$directorio = "dirImagenes/";
$imagenes = scandir($directorio); //array con el contenido de dirImagenes
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($imagenes as $imagen) : ?>
        <img src="<?=$directorio . $imagen?>" width="150">
        <br>
    <?php endforeach ?>
    <br><a href = "index.php">Inicio</a>
</body>
</html>