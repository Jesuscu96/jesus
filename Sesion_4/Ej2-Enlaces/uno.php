<?php
include "index.php";
$link = $_GET['link'] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uno</title>
</head>
<body>
    <p>El número de elance es el <?php echo htmlspecialchars($link); ?></p>
</body>
</html>