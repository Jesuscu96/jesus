<?php 
//Ejercicio 5. Crea un archivo llamado tareas.txt que almacene una lista de tareas. 
//Luego, crea un script que agregue nuevas tareas al archivo y muestre la lista completa.
$file = "log_admin.txt";
$file2 = "comentarios.txt";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actividad2/title>
</head>
<body>
    <h1>activiadad 2</h1>
    <form action="" method="post">
        <p>Usuario: <input type="text" name="usuario"> </p>
        <p>Comentario: <input type="text" name="comentario"> </p>
        
        
        <p><input type="submit" name="Agregar" value="enviar"></p>

    </form>
    
    <?php
    $fecha = date("d/m/Y H:i:s");

    ?>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p>Usuario: <input type="text" name="usuario"> </p>
        
        <p>comentario: <input type="text" name="comentario"> </p>
        
        
        <p><input type="submit" name="Agregar" value="enviar"></p>

    </form>
    
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = trim($_POST["usuario"]) ?? ""; 
        $comentarios = trim($_POST["comentario"]) ?? "";
        if($_POST["usuario"] == "admin"){
            if (!file_exists($file)){
                $fp = fopen($file, "w");
                $usario = $_POST["nombre"];
                $registro = " Usuario: $nombre, Fecha: $fecha  \n ";
                
                fwrite($fp, $registro);
                fclose($fp);
                
            } else {
                $fp = fopen($file, "a") ;              
                $registro = " Usuario: $nombre, Fecha: $fecha  \n ";
                $usario = $_POST["nombre"];
                fwrite($fp, $registro);
                fclose($fp);
                
            }
            echo $registro;
            $fp = fopen($file, "r");
            $mostrar = fgets($fp);
            fclose($fp);
            echo $mostrar;

            // while ($linea = fgets($fp) !== false) {
            //     echo "{$linea} <br>";
            // }
        } elseif($_POST["usuario"] !== "") {
            if (!file_exists($file)){
                $fp = fopen($file, "w");
                
                $registro2 = " Usuario: $nombre, Fecha: $fecha \n ";
                
                fwrite($fp, $registro);
                fclose($fp);
                
            } else {
                $fp = fopen($file, "a") ;              
                $registro2 = " Usuario: $nombre, Fecha: $fecha  \n ";
                
                fwrite($fp, $registro);
                fclose($fp);
                
            }
            if (!file_exists($file2)){
                $fp2 = fopen($file, "w");
                $usario = $_POST["nombre"];
                $registro = " Usuario: $nombre, Fecha: $fecha, Comentario: $comentarios \n ";
                
                fwrite($fp2, $registro);
                fclose($fp2);
                
            } else {
                $fp2 = fopen($file2, "a") ;              
                $registro = " Usuario: $nombre, Fecha: $fecha, Comentario: $comentarios   \n ";
                $usario = $_POST["nombre"];
                fwrite($fp2, $registro);
                fclose($fp2);
                
            }
        }
        
  
        
    }

    echo $mostrar;
    ?>
</body>
</html>