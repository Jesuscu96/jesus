<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

// session_unset();
// session_destroy();
// header("Location: login.php");
// exit;


require_once("sessions.php");
$sesion = new Sessions();
$sesion->cerrarSesion();
header("Location: ../../login.php");
exit();