<?php 
$actividades = [

    ['nombre' => 'Actividad 1', 'fecha' => '30/09/2024', 'estado' => 'Pendiente'],

    ['nombre' => 'Actividad 2', 'fecha' => '14/10/2024', 'estado' => 'En progreso'],

    ['nombre' => 'Actividad 3', 'fecha' => '28/10/2024', 'estado' => 'Completada'],

    ['nombre' => 'Actividad 4', 'fecha' => '11/11/2024', 'estado' => 'Pendiente'],

    ['nombre' => 'Actividad 5', 'fecha' => '25/11/2024', 'estado' => 'Pendiente'],

];
foreach ($actividades as $array1) {
    echo "<br>{$array1["nombre"]}: {$array1["fecha"]}, {$array1["estado"]}. ";
}

?>
