
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con vadilacion</title>
</head>
<body>
    <h1>Transportes</h1>
    <form action="" method="post">
        
            
        <p>Nombre de un tranporte publico: <input type="text" name="transporte"> </p>
        
        <p><input type="submit" name="enviar" value="enviar"></p>
        
        
        
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $transportes = strtolower(trim($_POST["transporte"])) ?? ""; 
        
        if ($transportes == "metro") {
            
            echo "<br> El trayecto es de 10 minutos";
        }elseif ($transportes == "bus") {
            echo "<br> El trayecto es de 20 minutos";
        }
        else {
            echo "<br> El trayecto no se puede realizar";
        }
    }
    ?>
    
</body>
</html>






