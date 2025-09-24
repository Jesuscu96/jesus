<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con vadilacion</title>
</head>
<body>
    <h1>Numero aleatorio</h1>
    <form action="" method="post">
   
        <p><input type="submit" name="enviar" value="enviar"></p>

    </form>
    <?php
    
    $numero = rand(1, 100);
    $numero2 = $numero * 2;
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if ($numero % 2 == 0) {
            echo "El número $numero es par.";
        } else {
            echo "<br>El número $numero es impar y el doble es $numero2.";
        }
    
    }
    
    ?>
    
</body>
</html>







