<?php
//Mostrar errores
/* ini_set('displays_errors');
error_reporting(E_ALL); */
?>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$frutas = ["naranja", "manzana", "platano", "pera", "uva"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Frutas</title>
</head>
<body>
    <?php 
   
    if (isset($_POST['enviarformularios'])){
        echo "<br>Tu fruta favorita es: " . $_POST['fruit'];
        echo '<br><a href="./Ej2.php">Inicio</a>';
        if (empty($_POST['fruit'])){
            echo "No has seleccionado ninguna fruta.";
        }
    }   
    ?> 
    <h1>Frutas</h1>
        <form action="Ej2.php" method="post">
            
            
            <p>Selecciona la opción deseada:</p>
            <select name ="fruit">
                <?php foreach ($frutas as $fruta):?>
                    <option  value="<?=$fruta?>"> <?=$fruta?> </option>
                <?php endforeach;?>
                
            </select>
                
            <p><input type="submit" name="enviarformularios" value="Enviarformulario"></p>
            <!-- <div>
                <input type="color" id="head" name="head" value="" />
                <label for="head">Head</label>
            </div> -->
            
           
        </form>
</body>
</html>