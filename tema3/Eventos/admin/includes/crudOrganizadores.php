<?php
require_once("database.php");

class Organizadores {
    // Mostrar todos los nombres
    public function showOrganizadores() {
        try {
            $sqlConnection = new Connection();
            $mySQL = $sqlConnection->getConnection();
            
            // Consulta con JOIN para mostrar también el nombre de la ciudad
            $sql = "SELECT *
                    FROM organizadores";
            $result = $mySQL->query($sql);
            
            $sqlConnection->closeConnection($mySQL);

            return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];

        } catch (Exception $e) {
            return [];
        }
    }

    // Obtener un nombre por su ID
    public function getById($id) {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "SELECT * FROM organizadores WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $db->closeConnection($conn);
        return $result->fetch_assoc();
    }

    // Insertar un nuevo nombre
    public function insertarOrganizador($nombre, $email) {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "INSERT INTO organizadores (nombre, email) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nombre, $email);
        $stmt->execute();
        
        $db->closeConnection($conn);
    }

    // Actualizar un nombre existente
    public function actualizarOrganizador($id, $nombre, $email) {
        $db = new Connection();
        $conn = $db->getConnection();
        
        $sql = "UPDATE organizadores 
                SET nombre = ?, email = ?
                WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nombre, $email, $id);
        $stmt->execute();

        $db->closeConnection($conn);
    }

    // Eliminar un nombre
    public function eliminarOrganizador($id) {
        try{
            $db = new Connection();
            $conn = $db->getConnection();
            
            $sql = "DELETE FROM organizadores WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $eliminar = $stmt->affected_rows > 0;
            $db->closeConnection($conn);
            return $eliminar;
        }
        catch(Exception $e) {
            return False;
        }
    }
}
?>
