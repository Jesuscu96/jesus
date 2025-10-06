<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    <?php
   
    
    
    setcookie("usuario", $usuario, [
        "expires" => time() + 3600,
        "path" => "/",
        "secure" => false,
        "httponly" => false,
        "samesite" => "lax"
    ]);
    if (isset($_COOKIE["usuario"])) {
        $visitas = 0;
        if ($visitas == 0) {
            
        }
    }
    ?>
</body>
</html>