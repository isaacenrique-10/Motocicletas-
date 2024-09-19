<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']['username']); ?></h2>
    <a href="catalogo.php">Ver catálogo de motos</a><br>
    <a href="index.php?logout=true">Cerrar sesión</a>
</body>
</html>
