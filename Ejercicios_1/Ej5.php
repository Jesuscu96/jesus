<?php
$num1 = 3;
$num2 = 6;
function sumar($n1, $n2) {
    
    global $num3;
    $num3 =  $n1 + $n2;
}
$suma = sumar($num1, $num2)
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
