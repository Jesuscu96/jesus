<?php
$file = "config.txt";
$mensaje = "Usuario ha accedido al sistema.";
$fecha = ("d/m/Y H:m:s");
$fp = fopen($file, "a");
fwrite($fp, "$fecha - $mensaje\n");
fclose($fp);
echo "Mensaje registrado en el log"


?>