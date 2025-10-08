<?php 
if(!isset($_GET['no_autorizado'])) {
    echo "No autorizado";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "menu.php";?>
    <hr>
    <h2>Bienvenidos a DAWAZON</h2>
</body>
</html>
<?php 
    // if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["acceder"])) {
    //     header("Location:login.php");

    // }
?>