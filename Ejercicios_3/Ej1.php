<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = test_input($_POST["usuario"] ?? "");
    $email = test_input($_POST["email"] ?? "");
    $contraseña = test_input($_POST["contraseña"] ?? "");
    $opinion = test_input($_POST["opinion"] ?? "");
    
    if ($usuario == "")
        $errores[] = "El campo usuiario es obligatorio";
    if ($email == "")
        $errores[] = "El campo correo electronico es obligatorio";
    if ($contraseña == "")
        $errores[] = "El campo contraseña es obligatorio";
    if ($opinion == "")
        $errores[] = "El campo opinion es obligatorio";
    if ($genero == "")
        $errores[] = "El campo genero es obligatorio";
    if (!empty($errores)):
        foreach ($errores as $error):
            echo $error;
        endforeach;
    else: echo "Usuario $usuario, email $email, contraseña $contraseña y opinion $opinion";
    endif;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con vadilacion</title>
</head>
<body>
    <h1>Encuesta</h1>
        <form action="enviarmail.php" method="post">
            
               
            <p>Usuario: <input type="text" name="usuario"> </p>
            <p>Correo electronico: <input type="password" name="email"></p>
            <p>Contraseña: <input type="text" name="contraseña"></p>
            <p>Genero:</p>
            <p><input type="radio" name="genero" value = "hombre"> Hombre </p>
            <p><input type="radio" name="genero" value = "mujer"> Mujer </p>
            <h4>Marque la casillas:</h4>
            <div>
                
                <input type="checkbox" id="publicidad" name="publicidad" />
                <label for="publicidad">Marque si quiere que le envien publicidad de nuestros productos</label>
                
            </div>
            <div>
                <input type="checkbox" id="publicidad" name="publicidad" />
                <label for="publicidad">Marque para aceptar las politicas y condiciones de la pagina web</label>
            </div>
             
            <p>Opinión sobre nuestra pagina web:<textarea cols="25" rows="3" placeholder="Introuce tu opinión..." maxlength="15" size="50px"></textarea>> </textarea>
            <form method="post" action="/send/">
                Selecciona la opción deseada:
                <select>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                </select>
                </form>
            
            <p>
                ¿Cuanro navegas por internet? (Señala la opción que mas se acerque):
                <select name="tiempo_navegacion" size="5" multiple>
                <option value="2">2 horas al dia </option>
                <option value="4">4 horas al dia</option>
                <option value="10">10 horas a la semana</option>
                <option value="20">20 horas al mes</option>
                     
                </select>

            </p>
            <p><input type="submit" name="enviarformularios" value="Enviar formulario"></p>
            <!-- <div>
                <input type="color" id="head" name="head" value="" />
                <label for="head">Head</label>
            </div> -->
            
           
        </form>
</body>
</html>