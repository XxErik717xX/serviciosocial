<<?php
include 'conexion.php';  // Incluimos la conexión

// Consulta para obtener las tablas de la base de datos
$sql = "SHOW TABLES FROM databasebitacora";  // Cambia 'nombre_de_tu_base' por el nombre de tu base de datos
$result = $conn->query($sql);

// Verificar si hay resultados
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<h2>Tablas en la base de datos:</h2>";
    echo "<ul>";
    // Mostrar cada tabla
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["usuarios"] . "</li>";  // Cambia 'Tables_in_nombre_de_tu_base' por tu base de datos
    }
    echo "</ul>";
} else {
    echo "No se encontraron tablas en la base de datos.";
}

$conn->close();
?>
