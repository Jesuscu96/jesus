<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Selecciona un idioma:
        <br><select name="idiomas">
            <option value="es">Español</option>
            <option value="en">Ingles</option>
            <option value="fr">Frances</option>
        </select>
        

        <p><input type="submit" name="enviar" value="enviar"></p>
    </form>
     <?php
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $idiomas = trim($_POST["idiomas"]) ?? ""; 
        //$comentarios = trim($_POST["comentario"]) ?? "";
    }
    setcookie("idiomas", $usuario, [
        "expires" => time() + 3600,
        "path" => "/",
        "secure" => false,
        "httponly" => false,
        "samesite" => "lax"
    ]);
    if (isset($_COOKIE["idiomas"])) {
        echo "Idioma elegido " . htmlspecialchars($_POST["idiomas"]);
    }
    ?>
</body>
</html>