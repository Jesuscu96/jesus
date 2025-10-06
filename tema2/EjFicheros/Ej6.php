<?php

$file = "usuarios.csv";

$usuario = ["Pedro", "pedro@gmail.com" , "123456789"];

$fp = fopen($file, 'a');

fputcsv($fp, $usuario);

fclose($fp);

echo "Lista de usuarios:<br>";

$fp = fopen($file, 'r');

while (($datos = fgetcsv($fp)) !== FALSE) { 
    echo "Nombre: $datos[0], Correo: $datos[1], Teléfono: $datos[2]<br>";
}

fclose($fp);

?> 