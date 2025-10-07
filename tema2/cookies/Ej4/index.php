
    <?php
    $visitas = 0;
   
    if (isset($_COOKIE["usuario"])) {
        $visitas = $_COOKIE["usuario"]+1;
    }
    setcookie("usuario", $visitas, [
        "expires" => time() + 3600,
        "path" => "/",
        "secure" => false,
        "httponly" => false,
        "samesite" => "lax"
    ]);
    
    
    
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
    if ($visitas < 1) {
        echo "<h1> Bienvenida nuevo usuario </h1>";
    }
   ?>
    
</body>
</html>