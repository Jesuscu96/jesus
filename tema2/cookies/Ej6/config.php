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
        <p> Color de fondo Favorito: <input name="color" type="color" value= "<?= $color?>"></p>
        <p><input type="submit" name="enviar" value="enviar"></p>

    </form>
    
    <?php
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviar"]) && isset($_POST["usuario"]) && isset($_POST["color"])) {
  
        $usuario = trim($_POST["usuario"]) ?? "";
        $color = $_POST["usuario"] ?? "";
        
        setcookie("usuario", $usario, [
            "expires" => time() - 3600,
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
        setcookie("color", $color, [
            "expires" => time() - 3600,
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);

    }
    ?>
</body>
</html>