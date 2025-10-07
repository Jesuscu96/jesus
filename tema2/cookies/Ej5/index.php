<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrar"])) {
    
    foreach ($_COOKIE as $clave => $valor) {
        
        setcookie($clave, "", [
            "expires" => time() - 3600,
            "path" => "/",
            "secure" => false,
            "httponly" => false,
            "samesite" => "Lax"
        ]);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Cookies</title>
</head>
<body>
    <form action="" method="POST">
        <p><input type="submit" name="borrar" value="borrar"></p>
    </form>
</body>
</html>
