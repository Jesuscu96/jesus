
<?php
require_once("database.php");

class Sessions {
   
    public function getAll() {
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
    }

}
?>

