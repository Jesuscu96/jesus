<?php 
//Ejercicio 5. Crea un archivo llamado tareas.txt que almacene una lista de tareas. 
//Luego, crea un script que agregue nuevas tareas al archivo y muestre la lista completa.
$file = "tareas.txt";

if (!file_exists($file)){
    $contador = 0;
    $fp = fopen($file, "a");
    
    fclose($fp);
}
$fp = fopen($file, "r");
$contador = fread($fp, filesize($file));
$fp = fopen($dile, "w");
fwrite($fp, $contador);
fclose($fp);
echo"Estas son las vistas de la web $contador";

?>

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
        <p>Tarea: <input type="text" name="tareas"> </p>
        
        
        <p><input type="submit" name="Agregar" value="enviar"></p>

    </form>
    <a href="index.php">Otro tarea</a>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = trim($_POST["tareas"]) ?? ""; 
        
  
        
    }

    ?>
    
</body>
</html>
