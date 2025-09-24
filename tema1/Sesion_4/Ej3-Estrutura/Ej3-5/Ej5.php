
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con vadilacion</title>
</head>
<body>
    <h1>Listado</h1>
    <form action="" method="post">
        <p>Nombre: <input type="text" name="nom"> </p>
        <p>Profesion: <input type="text" name="prof"> </p>
        
        <p><input type="submit" name="enviar" value="enviar"></p>

    </form>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = trim($_POST["nom"]) ?? ""; 
        $profesion = trim($_POST["prof"]) ?? "";
        
        $lista = [$nombre => $profesion];
        foreach ($lista as $i0=>$iValor) {
            echo "Clave = ". $i0 . ", Valor = " . $iValor;
            echo "<br>";
        }
    }

    ?>
    
</body>
</html>