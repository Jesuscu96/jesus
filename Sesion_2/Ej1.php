<?php
$array1 = ["marca" => "Audi", "precio" => "35850€", "potencia" => " 210cv"];
echo $array1["precio"];
echo "<br>";
foreach ($array1 as $i0=>$iValor) {
    echo "Clave=". $i . ", Valor=" . $iValor;
    echo "<br>";
}
?>