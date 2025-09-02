<?php
// Configura la ruta al archivo de conexión de tu backend
// El 'dirname(__DIR__)' navega al directorio padre del directorio actual
// y luego entra en la carpeta de tu repositorio.
// Cambia 'tu_nombre_del_repositorio' por el nombre real de tu carpeta.
$ruta_conexion = dirname(__DIR__) . '/Backend/conexion.php';

// Asegúrate de que el archivo de conexión existe antes de incluirlo
if (file_exists($ruta_conexion)) {
    // Incluye el archivo de conexión para ejecutarlo
    // Esto hará que se conecte a la base de datos y muestre la tabla
    require_once $ruta_conexion;
} else {
    // Si el archivo no se encuentra, muestra un mensaje de error
    echo "<h1>❌ Error: Archivo de conexión no encontrado.</h1>";
    echo "<p>Verifica que la ruta en el archivo <strong>ver_usuarios.php</strong> sea correcta.</p>";
    echo "<p>Ruta buscada: " . htmlspecialchars($ruta_conexion) . "</p>";
}
?>