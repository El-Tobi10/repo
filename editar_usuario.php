<?php
include "C:/xampp/htdocs/repo/conexion/conexion.php";
header('Content-Type: application/json');
// Habilitar reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificar que los datos estén llegando
        if (!isset($_POST['id_usuario'])) {
            throw new Exception('ID de usuario no proporcionado');
        }

        $rol = $_POST['rol'];

        $queryRol = "SELECT * FROM roles WHERE rol = '$rol'";
        $resultRol = $con->query($queryRol);
        if ($resultRol && $resultRol->num_rows > 0) {
            $row = $resultRol->fetch_assoc();
            $id_rol = $row['id_rol'];
        } else {
            $id_rol = 2; 
        }

        $id_usuario = $_POST['id_usuario'];
        $usuario = $_POST['user'] ?? '';

        $query = "UPDATE usuarios SET usuario = ?, id_rol = ? WHERE id_usuario = ?";

        $stmt = $con->prepare($query);

        if (!$stmt) {
            throw new Exception('Error en la preparación de la consulta: ' . $con->error);
        }
        $stmt->bind_param('sii', $usuario, $id_rol, $id_usuario);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Usuario actualizado correctamente']);
        } else {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }

        $stmt->close();

    } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Verificar que el ID de reserva esté presente
        if (!isset($_GET['id_usuario'])) {
            throw new Exception('ID de usuario no proporcionado');
        }

        $id_usuario = $_GET['id_usuario'];

        $query = "SELECT * FROM usuarios WHERE id_usuario = ?";
        $stmt = $con->prepare($query);

        if (!$stmt) {
            throw new Exception('Error en la preparación de la consulta: ' . $con->error);
        }

        $stmt->bind_param('i', $id_usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            throw new Exception('No se encontró el usuario');
        }

        $reserva = $result->fetch_assoc();
        echo json_encode($reserva);

        $stmt->close();
    }
} catch (Exception $e) {
    // Enviar error detallado
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage(),
        'error_details' => $e
    ]);
}

$con->close();