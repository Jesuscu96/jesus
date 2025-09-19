<?php
include "index.php";
$link = $_GET['link'] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dos</title>
</head>
<body>
    <p>Mi comida favorita es <?php echo htmlspecialchars($link); ?></p>
</body>
</html>