<?php 
//Ejercicio 7: Crea un script en PHP que lea los datos de productos almacenados 
//en un archivo de texto llamado productos.txt y los muestre en una tabla HTML.

$file = "tareas.txt";

if (!file_exists($file)){
    $contador = 0;
    $fp = fopen($file, "a");
    
    fclose($fp);
}
$fp = fopen($file, "r");
$contador = fread($fp, filesize($file));
$fp = fopen($dile, "w");
fwrite($fp, $contador);
fclose($fp);
echo"Estas son las vistas de la web $contador";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej7</title>
</head>
<body>
    <h2>Productos Ej7 </h2>
  
    ?>

    <h3>Libros</h3>
    <table border="1">
        <tr>
            <td>ID_LIBRO</td>
            <td>LIBRO</td>
            <th>AUTOR</th>
            <th>CATEGORIA</th>
            <th>PRECIO</th>
        </tr>
        <?PHP
        //BUCLE PARA RECORRER LAS CONSULTA
        while ($fila=$sql->fetch_array()) {
            $id_libro= $fila[0]; 
            $libro = $fila[1];
            $titulo = $fila['titulo']; 
            $autor = $fila['autor']; 
            $id_categoria = $fila['id_categoria']; 
            $precio = $fila['precio'];
 
            ?>
            <tr>
                <td><?php echo $id_libro; ?></td>
                <td><?php echo $titulo; ?></td>
                <td><?php echo $autor; ?></td>
                <td><?php echo $id_categora; ?></td>
                <td><?php echo $precio; ?></td>
            </tr>
        <?php } //end while ?>
    </table>
   
    
</body>
</html>