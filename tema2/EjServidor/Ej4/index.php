<?php 

$file = "portadas/";
$imagenes = scandir($file);
if(isset($_GET["imagen"])){
    $imagen = $_GET["imagen"];
    if( unlink("portadas/{$imagen}")){
        header("location: index.php");
    }
    
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
    <a href = "index.php">Inicio</a>
    <br>
    
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php
    foreach($imagenes as $imagen) : 
    if($imagen !== "." && $imagen !== ".." && !is_dir($file . $imagen)) {?>
        <div class="mb-3">
            <img src="<?=$file . $imagen?>" width="150" class="img-thumbnail mb-2"></br>
            <a href="<?=$file . $imagen?>" download class="btn btn-success btn-sm mb-1">Descargar</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#confirmModal<?=$imagen?>">
                Eliminar
            </button>
            <!-- Modal -->
            <div class="modal fade" id="confirmModal<?=$imagen?>" tabindex="-1" aria-labelledby="confirmModalLabel<?=$imagen?>" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel<?=$imagen?>">Confirmar eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                  </div>
                  <div class="modal-body">
                    ¿Seguro que quieres eliminar la imagen <strong><?=$imagen?></strong>?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="index.php?imagen=<?=$imagen?>" class="btn btn-danger">Eliminar</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    <?php
    }
    endforeach;
    ?>

    <!-- Bootstrap JS (for modal functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   

    
    <?php
    /*$imagen = "foto.JPG";

    if (preg_match('/\.(jpg|jpeg|png)$/i', $imagen)) {
        echo "Es una imagen válida";
    } else {
        echo "No es una imagen válida";
    } */
    ?>
    
</body>
</html>