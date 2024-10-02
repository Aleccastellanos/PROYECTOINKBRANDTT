<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $tipo = $_POST['tipo'];

    // Insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (nombre, email, contrasena, tipo) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $nombre, $email, $password, $tipo);

    if ($stmt->execute()) {
        header('Location: login.html');
    } else {
        echo "Error al registrar el usuario.";
    }
}
?>
