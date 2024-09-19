<?php
session_start();

include 'app/conecta.php'; // Incluimos el archivo de conexión MySQLi
include 'app/Acciones.php'; // Incluimos el archivo de acciones

$acciones = new Acciones($Conecta); // Creamos una instancia de Acciones pasándole la conexión MySQLi
$motos = $acciones->mostrarMotos(); // Obtenemos las motos utilizando el método de Acciones

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    $acciones->logout(); // Manejamos el cierre de sesión si se solicita
}

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
    <title>Catálogo de Motos</title>
</head>
<body>
    <h2>Catálogo de Motos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motos as $moto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($moto['marca']); ?></td>
                    <td><?php echo htmlspecialchars($moto['modelo']); ?></td>
                    <td><?php echo htmlspecialchars($moto['anio']); ?></td>
                    <td><?php echo htmlspecialchars($moto['precio']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="catalogo.php?logout=true">Cerrar sesión</a>
</body>
</html>
