
<?php
$file = 'config.txt';

// Comprobar si el archivo existe
if (file_exists($file)) {
    // Abrir el archivo en modo lectura
    $fp = fopen($file, 'r');
    
    // Leer el archivo lÃ­nea por lÃ­nea
    while ($linea = fgets($fp)) {
        // LIST = crea esas 2 variables y les asigna los valores del explode
        // EXPLODE = Separar clave y valor por el sÃ­mbolo "="
        list($clave, $valor) = explode('=', trim($linea));
        echo "Clave: $clave, Valor: $valor <br>";
    }
    
    // Cerrar el archivo
    fclose($fp);
} else {
    echo "El archivo de configuraciÃ³n no existe.";
}
