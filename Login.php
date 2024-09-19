<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($_GET['error'])) { echo "<p style='color: red;'>".$_GET['error']."</p>"; } ?>
    <form action="index.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
