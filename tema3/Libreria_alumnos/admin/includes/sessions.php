<?php

// require_once("database.php");
// class Libros {
//     public function getPopulares($limite = 4) {
//         $db = new Connection();
//         $conn = $db->getConnection();
        
//         $sql = "SELECT * FROM usuarios WHERE username = ?";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("s", $username);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         $usuario = $result->fetch_assoc();
//         $db->closeConnection($conn);
//         if ($usuario && password_verify($password, $usuario["password"])) {
//             return $usuario;
//         }
//         return null;

        
//     }
//     public function crearSesion($usuario) {
//         session_start();
      
//         $_SESSION["usuarios"] = $usuario;
//     }
//     public function comprobarSesion() {
//         session_start();
//         return isset($_SESSION["usuarios"]);
//     }
//     public function cerrarSesion($usuario) {
//         session_start();
//         session_destroy();
//     }
// }
?>
<?php
require_once("database.php");

class Sessions {
    public function comprobarCredenciales($username, $password) {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $usuario = $result->fetch_assoc();
        $db->closeConnection($conn);
        
        if ($usuario && password_verify($password, $usuario['password'])) {
            return $usuario;
        }

        return null;
    }
    
    public function crearSesion($usuario) {
        session_start();
        $_SESSION['usuario'] = $usuario;
    }
    
    public function comprobarSesion() {
        session_start();
        return isset($_SESSION['usuario']);
    }
    public function sesionByUsuario() {
        
        return $byUsuario = $_SESSION['usuario'] ;

    }
    public function cerrarSesion() {
        session_start();
        session_destroy();
    }
    /* public function getAll() {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "SELECT * FROM usuarios";
        
        $result = $conn->query($sql);
        $db->closeConnection($conn);
        //cuando devuelve un solo resultado
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }
    public function insertarUsuario($nombre, $apellidos, $email, $username, $password) {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, username, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $nombre, $apellidos, $email, $username, $password);
        $stmt->execute();

        $db->closeConnection($conn);
    }
    public function actualizarUsuario($id, $nombre, $apellidos, $email, $username, $password) {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "UPDATE usuarios SET nombre=?, apellidos=?, email=?, username=?, password=? WHERE id_usuario=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $nombre, $apellidos, $email, $username, $password, $id);
        $stmt->execute();

        $db->closeConnection($conn);
    }
    public function eliminarUsuarios($id) {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "DELETE FROM usuarios WHERE id_usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $db->closeConnection($conn);
    } */
}
?>

