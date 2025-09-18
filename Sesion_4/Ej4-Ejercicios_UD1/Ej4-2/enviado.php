<?php 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["opciones"] == "opcionSi") {
            echo "Si";
        }elseif ($_POST["opciones"] == "opcionNo") {
            header("Location: index.php?error=1");
        }
       
    }
?>