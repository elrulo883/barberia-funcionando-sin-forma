<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'webmaster') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Webmaster</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Asegúrate de tener un archivo de estilos -->
</head>
<body>
    <header>
        <h1>Bienvenido, Webmaster</h1>
        <nav>
            <ul>
                <li><a href="registrar_empleado.php">Registrar Empleado</a></li>
                <li><a href="eliminar_empleado.php">Eliminar Empleado</a></li>
                <li><a href="ver_reportes_financieros.php">Ver Reportes Financieros</a></li>
                <li><a href="agendar_cita.php">Agendar Cita</a></li>
                <li><a href="manejo_pagos.php">Manejo de Pagos</a></li>
                <li><a href="ver_citas.php">Ver Citas</a></li>
                <li><a href="gestion_inventario.php">Gestión de Inventario</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Funciones de Webmaster</h2>
        <p>Aquí podrás gestionar empleados, reportes, citas y más.</p>
    </main>
</body>
</html>