<?php
include "C:/xampp/htdocs/repo/conexion/conexion.php";
header('Content-Type: application/json');

// Habilitar reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['id_usuario'])) {
            throw new Exception('ID de reserva no proporcionado');
        }

        $id_usuario = $_POST['id_usuario'];

        $query = "DELETE FROM usuarios WHERE id_usuario = ?";
        $stmt = $con->prepare($query);

        if (!$stmt) {
            throw new Exception('Error en la preparación de la consulta: ' . $con->error);
        }

        $stmt->bind_param('i', $id_usuario);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Usuario eliminado correctamente']);
        } else {
            throw new Exception('Error al eliminar usuario: ' . $stmt->error);
        }

        $stmt->close();
    }
} catch (Exception $e) {
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage(),
        'error_details' => $e
    ]);
}

$con->close();