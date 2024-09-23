<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario por defecto en WampServer
$password = ""; // Por defecto no hay contraseña
$dbname = "alimentacia"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$semestre = $_POST['semestre'];
$carrera = $_POST['carrera'];
$matricula = $_POST['matricula'];

// Insertar los datos en la tabla alimenticia
$sql = "INSERT INTO alimenticia (nombre, apellido_paterno, apellido_materno, semestre, carrera, matricula)
        VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$semestre', '$carrera', '$matricula')";

if ($conn->query($sql) === TRUE) {
    echo "Registro guardado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

