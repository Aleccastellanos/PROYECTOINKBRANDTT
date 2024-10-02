<?php
session_start();
if ($_SESSION['tipo'] != 'tatuador') {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Tatuador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Panel de Tatuador</h1>
        <nav>
            <ul>
                <li><a href="subir_trabajos.php">Subir Trabajos</a></li>
                <li><a href="editar_perfil.php">Editar Perfil</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Bienvenido, <?php echo $_SESSION['usuario_nombre']; ?></h2>
        <p>Desde aquí puedes gestionar tus trabajos y perfil.</p>
    </section>
</body>
</html>
