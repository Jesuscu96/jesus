<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar Productos Jesus Clemente</title>
</head>
<body>
    <h1>Jesus Clemente</h1>
        
            
               
        <!-- <p>Usuario: <input type="text" name="usuario"> </p> -->
           
        <form method="post" action="">
            Selecciona la opción deseada:
            <br><select name="Productos1">
                <option value="tv">Tv</option>
                <option value="monitor">Monitor</option>
                <option value="altavoces">Altavoces</option>
            </select>
            <br><select name="Productos2">
                <option value="silla">Silla</option>
                <option value="mesa">Mesa</option>
                <option value="sofa">Sofa</option>
            </select>
            <br><select name="Productos3">
                <option value="macarrones">Macarrones</option>
                <option value="galletas">Galletas</option>
                <option value="jabon">Jabon</option>
            </select>

            <p><input type="submit" name="comprar" value="comprar"></p>
        </form>
        
        
        
            
        
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $Producto1 = trim($_POST["Productos1"]) ?? ""; 
        $Producto2 = trim($_POST["Productos2"]) ?? "";
        $Producto3 = trim($_POST["Productos3"]) ?? "";
        
        $lista1 = ["tv" => "250", "monitor" => "150", "altavoces" => "33",];
        $lista2 = ["silla" => "40", "mesa" => "150", "sofa" => "380",];
        $lista3 = ["macarrones" => "4", "galletas" => "1", "jabon" => "3",];
        $comprado = [$Producto1 => $lista1.$Producto1, $lista2.$Producto2, $lista3.$Producto3];
        foreach ($comprado as $i=>$iValor) {
            
            
            echo "Clave = ". $i0 . ", Valor = " . $iValor;
            echo "<br>";
        }
        }

        
        ?>

</body>
</html>