<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "eductech_bdtech";
$password = "Buickcentury_23@";
$dbname = "eductech_Prueba_1";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para seleccionar todos los usuarios de la tabla
$sql = "SELECT id, nombre_usuario, correo, fecha_registro FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si hay resultados, crea una tabla HTML
    echo "<h1>Usuarios de la Base de Datos</h1>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Nombre de Usuario</th><th>Correo</th><th>Fecha de Registro</th></tr>";

    // Recorre cada fila de resultados y muestra los datos
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre_usuario"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["fecha_registro"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados en la tabla de usuarios.";
}

// Cierra la conexión
$conn->close();
?>