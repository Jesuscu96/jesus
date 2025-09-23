<?php
//Mostrar errores
ini_set('displays_errors');
error_reporting(E_ALL); 
?>

<?php
$libro = "El Principito";
$comida = "Paella";
$pelicula = "Gran Torino";
if (isset($_GET['lib'])):
    echo "Mi libro favorita es <b> {$_GET["lib"]}</b> <br>";
elseif (isset($_GET['comi'])):
    echo "Mi comida favorita es <b> {$_GET["comi"]}</b> <br>";
elseif (isset($_GET['peli'])):
    echo "Mi comida pelicula es <b> {$_GET["peli"]}</b> <br>";
else:

?>


<<a href="index.php?lib=<?= $libro ?>">Mi libro favorito</a>
<a href="index.php?comi=<?= $comida ?>">Mi comida favorita</a>
<a href="index.php?peli=<?= $pelicula ?>">Mi película favorita</a>


<?php
endif;
if (isset($_GET['lib']) || isset($_GET['comi']) || isset($_GET['peli'])):
    echo '<a href="index.php">Volver</a>';
endif;
?>
