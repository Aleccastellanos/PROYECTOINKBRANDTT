<?php
session_start();
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Buscar el usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();

    // Verificar contraseña
    if ($usuario && password_verify($password, $usuario['contrasena'])) {
        $_SESSION['usuario'] = $usuario['id'];
        $_SESSION['tipo'] = $usuario['tipo'];
        
        if ($usuario['tipo'] == 'tatuador') {
            header('Location: panel_tatuador.php');
        } else {
            header('Location: panel_cliente.php');
        }
    } else {
        echo "Credenciales incorrectas";
    }
}
?>
