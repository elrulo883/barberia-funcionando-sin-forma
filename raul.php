<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'raul') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Raul</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Asegúrate de tener un archivo de estilos -->
</head>
<body>
    <header>
        <h1>Bienvenido, Raul</h1>
        <nav>
            <ul>
                <li><a href="gestion_inventario.php">Inventarios</a></li>
                <li><a href="manejo_pagos.php">Pagos</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Funciones de Raul</h2>
        <p>Aquí podrás gestionar inventarios y pagos.</p>
    </main>
</body>
</html>