<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
require_once "./includes/crudOrganizadores.php";


$organizadorObj = new Organizadores();


$listaOrganizadores = $organizadorObj->showOrganizadores();

/*require_once "./includes/sessions.php";
$sesion = new Sessions();
if (!$sesion->comprobarSesion()) {
    header("Location: ../login.php");
    exit();
}*/

$accion = $_GET['accion'] ?? null;
$id = $_GET['id'] ?? null;
$mensaje = "";
$error=[];

// Eliminar datos_organizadores
if ($accion === "eliminar" && $id) {
    $eliminar = $organizadorObj->eliminarOrganizador($id);
    if($eliminar) {
        $mensaje = "Organizador eliminado correctamente.";
        header("Location: organizadores.php");
        exit();    
    }
    else {
        $error[] = "Error al borrar el organizador";
    }
   
}

// Preparar datos del formulario
$datos_organizadores = [
    'nombre' => '',
    'email' => '',
    
];

if ($accion === "editar" && $id) {
    $datos_organizadores = $organizadorObj->getById($id);
}

// Procesar el formulario de creación o edición
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
   

    if ($accion === "crear") {
        $organizadorObj->insertarOrganizador($nombre, $email);
    } elseif ($accion === "editar" && $id) {
        $organizadorObj->actualizarOrganizador($id, $nombre, $email);
    }
    header("Location: organizadores.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de organizadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include("./menu.php"); ?>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <main class="col-md-10">
                <h2>Organizadores</h2>

                <a href="organizadores.php?accion=crear" class="btn btn-success mb-3">Añadir nuevo Organizador</a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>email</th>  
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaOrganizadores as $ev) : ?>
                        <tr>
                            <td><?= htmlspecialchars($ev['nombre']) ?></td>
                            <td><?= htmlspecialchars($ev['email']) ?></td>
                            
                            <td>
                                <a href="organizadores.php?accion=editar&id=<?= $ev['id'] ?>" class="btn btn-sm btn-primary">
                                    Editar
                                </a>
                                <a href="organizadores.php?accion=eliminar&id=<?= $ev['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este organizador?')">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if(!empty($error)) {
                    foreach($error as $e): ?>
                        <p><?= $e ?></p>
                    <?php endforeach;
                }?>

                <?php if ($accion === "crear" || ($accion === "editar" && $id)): ?>
                    <h3><?= $accion === "crear" ? "Nuevo organizador" : "Editar organizador" ?></h3>

                    <form method="post" class="mb-4" style="max-width: 500px;">
                        <div class="mb-2">
                            <label class="form-label">Nombre del organizador:</label>
                            <input type="text" name="nombre" class="form-control"
                                value="<?= htmlspecialchars($datos_organizadores['nombre']) ?>" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">email:</label>
                            <input type="email" name="email" class="form-control"
                                value="<?= htmlspecialchars($datos_organizadores['email']) ?>" required>
                        </div>

                       

                        

                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="organizadores.php" class="btn btn-secondary">Cancelar</a>
                    </form>
                <?php endif; ?>
            </main>
        </div>
    </div>

</body>
</html>
