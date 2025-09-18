<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con vadilacion</title>
</head>
<body>
    <h1>index</h1>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): 
        echo "<p>Dato no aceptado</p>"
    endif; ?>
    <form action="" method="post">
        <select  name="opciones">
            <option value="opcionSi">Si</option>
            <option value="opcionNo">No</option>
            
        </select>
        
        <p><input type="submit" name="enviar" value="enviar"></p>

    </form>
    <?php
    
   

    ?>
    
</body>
</html>