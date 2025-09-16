<?php
//Mostrar errores
ini_set('displays_errors');
error_reporting(E_ALL);
?>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fruit = $_POST["fruta"] ?? "";
    if ($fruit == "")
        $errores[] = "El seleciona al menos una fruta";
    if (!empty($errores)):
        foreach ($errores as $error):
            echo $error;
        endforeach;
    else: echo "Fruta $fruta";
    endif;
}
$frutas = ["naranja", "manzana", "platano", "pera", "uva"];

if (isset($_POST['fruta'])){
    echo "Tu fruta favorita es:" . $_POST['fruta'];
    if (empty($_POST['fruta'])){
        echo "No has seleccionado ninguna fruta.";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Frutas</title>
</head>
<body>
    
    <h1>Frutas</h1>
        <form action="enviarmail.php" method="post">
            
               
            
            <form method="post" action="/send/">
                <p>Selecciona la opción deseada:</p>
                <select>
                    <?php foreach ($frutas as $fruta):?>
                        <option value="<?=$fruta?>"> <?=$fruta?> </option>
                    <?php endforeach;?>
                    
                </select>
                </form>
                        
            

            
            <p><input type="submit" name="enviarformularios" value="Enviar formulario"></p>
            <!-- <div>
                <input type="color" id="head" name="head" value="" />
                <label for="head">Head</label>
            </div> -->
            
           
        </form>
</body>
</html>