<?php
session_start();
if ($_SESSION['tipo'] != 'cliente') {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Panel de Cliente</h1>
        <nav>
            <ul>
                <li><a href="citas.php">Ver Citas</a></li>
                <li><a href="tatuajes_realizados.php">Tatuajes Realizados</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Bienvenido, <?php echo $_SESSION['usuario_nombre']; ?></h2>
        <p>Desde aquí puedes gestionar tus citas y ver tus tatuajes realizados.</p>
    </section>
</body>
</html>
