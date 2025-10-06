<?php 
//Ejercicio 5. Crea un archivo llamado tareas.txt que almacene una lista de tareas. 
//Luego, crea un script que agregue nuevas tareas al archivo y muestre la lista completa.
$file = "log_admin.txt";
$file2 = "comentarios.txt";

// if (!file_exists($file2)){
//     $fp2 = fopen($file2, "a");
//     $fecha = date("d/m/Y H:i:s");
    
//     $registro = " Usuario: {$nombre}, Fecha: {$fecha}  / t ";
//     fwrite($file2, $registro);
//     fclose($fp2);
// } else {
//     $fp2 = fopen($file, "a");
//     $fecha = date("d/m/Y H:i:s");
//     $nombre += " / t ";
//     fwrite($file2, $nombre);
//     fclose($fp2);
// }



?>
<?php


// if (!file_exists($file)) {
//     //Registrar el error en el log
//     $fecha = date("d/m/Y H:i:s");
//     $error_message = "$fecha -Error: El archivo $file no existe.\n";

//     // abrir el archivo de log en modo append
//     $fp = fopen($log_file, 'a');
//     fwrite($fp, $error_message);
//     fclose($fp);
//     echo "Error registrado en el archivo log.";
// } else {
//     $fp = fopen($log_file, 'r');
//     $contenido = fread($fp, filesize($file));
//     fclose($fp);
//     echo "El contenido del archivo: $contenido.";
// }
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
    <a href="index.php">Otro tarea</a>
    <?php
    $fecha = date("d/m/Y H:i:s");
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    //     $nombre = trim($_POST["usuario"]) ?? ""; 
    //     $comentarios = trim($_POST["comentario"]) ?? "";
    //     if($_POST["usuario"] == "admin"){
    //         if (!file_exists($file)){
    //             $fp = fopen($file, "w");
    //             $registro = " Usuario: $usuario, Fecha: $fecha  \n ";
    //             $usario = $_POST["nombre"];
    //             fwrite($file, $registro);
    //             fclose($fp);
                
    //         } else {
    //             $fp = fopen($file, "a") ;              
    //             $registro = " Usuario: $usuario, Fecha: $fecha  \n ";
    //             $usario = $_POST["nombre"];
    //             fwrite($file, $fecha);
    //             fclose($fp);
                
    //         }
    //         echo $registro;
    //         $fp = fopen($file, "r");
    //         $mostrar = fgets($fp);
    //         fclose($fp);
    //         echo $mostrar;

    //         // while ($linea = fgets($fp) !== false) {
    //         //     echo "{$linea} <br>";
    //         // }
    //     }
        
  
        
    // }

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
        <?php  if($_POST["usuario"] == "admin"){ ?>
            <p>comentario: <input type="text" name="comentario"> </p>
        <
        
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