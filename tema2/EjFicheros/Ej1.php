<?php
$file = "contador.txt";
if (!file_exists($file)){
    $contador = 0;
    $fp = fopen($file, "w");
    fwrite($fp, $contador);
    fclose($fp);
}
$fp = fopen($file, "r");
$contador = fread($fp, filesize($file));
$fp = fopen($dile, "w");
fwrite($fp, $contador);
fclose($fp);
echo"Estas son las vistas de la web $contador";

?>