<?php 
$moda = [
    ["camiseta", 22, 50],
    ["pantalones", 15, 00],
    ["gorra", 5, 9],
    ["chaqueta", 17, 95]
];
foreach ($moda as $array1) {
    echo "<br>{$array1[0]}: En almacen: {$array1[1]}, vendidos: {$array1[2]}. ";
}
for ($i = 0; $i < count($moda); $i++) {
    for ($j = 0; $j < count($moda[$i]); $j++)
    echo $moda[$i][$j] . "";
}
?>
