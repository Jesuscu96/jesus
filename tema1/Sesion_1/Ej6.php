<?php
//Mostrar errores
ini_set('displays_errors');
error_reporting(E_ALL);

function tTarea(){
    $tiempo = 15;
    echo "Tiempo de cada tarea $tiempo en minutos<br>";
    contarTareas();
}

$tiempoTotal = 0;
function acumularTiempo(){
    global $tiempoTotal;
    $tiempoTotal = $tiempoTotal + 15;
    echo"Tiempo total acumulado: " .$tiempoTotal."minutos<br>";
    contarTareas();
}
function contarTareas(){
    static $contador = 0;
    $contador += 1;
    echo "Esta es la terea número: " .$contador;
}
tTarea();
acumularTiempo();
tTarea();
acumularTiempo();
tTarea();
acumularTiempo();
?>



<html>
    <head>
        <title>Ejercio 4 Jesús Clemente</title>
    <head>
    <body>
    <p>
        <?php
        echo "la suma de $num1 y $num2 es $num3"; 
        ?>
    </p>
    
    </body>
<html>
