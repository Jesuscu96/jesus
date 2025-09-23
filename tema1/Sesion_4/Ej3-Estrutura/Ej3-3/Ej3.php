
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con vadilacion</title>
</head>
<body>
    <h1>Multiplicacion</h1>
    <form action="" method="post">
        
            
        <p>Ingrese un numero: <input type="text" name="numero1"> </p>
        <p>Ingrese un numero: <input type="text" name="numero2"> </p>
        <p>Ingrese un numero: <input type="text" name="numero3"> </p>
        
        <p><input type="submit" name="enviar" value="enviar"></p>
        
        
        
    </form>
    <?php
    function multiplicar($n1, $n2, $n3){
        $multi = $n1 * $n2 * $n3;
        return $multi;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = trim($_POST["numero1"]) ?? ""; 
        $num2 = trim($_POST["numero2"]) ?? "";
        $num3 = trim($_POST["numero3"]) ?? "";
        $resultado = multiplicar($num1, $num2, $num3);
        echo "<br> Resultado de: $num1 x $num2 x $num3 = $resultado";

        
    }
    
    ?>
    
</body>
</html>







