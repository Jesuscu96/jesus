<?php
$log_file = "error_log";
$file = "archivo_inexistente.txt";
if (!file_exists($file)) {
    //Registrar el error en el log
    $fecha = date("d/m/Y H:i:s");
    $error_message = "$fecha -Error: El archivo $file no existe.\n";

    // abrir el archivo de log en modo append
    $fp = fopen($log_file, 'a');
    fwrite($fp, $error_message);
    fclose($fp);
    echo "Error registrado en el archivo log.";
} else {
    $fp = fopen($log_file, 'r');
    $contenido = fread($fp, filesize($file));
    fclose($fp);
    echo "El contenido del archivo: $contenido.";
}
?>