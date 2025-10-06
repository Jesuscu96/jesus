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
        
        <!-- <p>comentario: <input type="text" name="comentario"> </p> -->
        
        
        <p><input type="submit" name="enviar" value="enviar"></p>

    </form>
    
    <?php
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $usuario = trim($_POST["usuario"]) ?? ""; 
        //$comentarios = trim($_POST["comentario"]) ?? "";
    }
    setcookie("usuario", $usuario, [
        "expires" => time() + 3 * 24 * 60 * 60,
        "path" => "/",
        "secure" => false,
        "httponly" => false,
        "samesite" => "lax"
    ]);
    if (isset($_COOKIE["usuario"])) {
        echo "Hola " . htmlspecialchars($usuario);
    }
    ?>
</body>
</html>