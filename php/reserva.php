<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Variables obtenidas del formulario
    $nombre = $_GET["nombre"];
    $personas = $_GET["personas"];
    $correo = $_GET["correo"];

    // Conección a la BD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "italiannis";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Validar que personas tenga máximo dos caracteres
    if (strlen($personas) > 2) {
        echo '<script language="javascript">alert("El campo \'personas\' solo puede tener máximo dos caracteres.");window.location.href = "../html/ubicaciones.html#formulario";</script>';
        exit(); // Detener la ejecución del script si la validación falla
    }

    // Consulta a la tabla
    $sql = "INSERT INTO reservas (nombre, personas, correo) VALUES ('$nombre', $personas, '$correo')";

    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">alert("Reservacion hecha, enviamos informacion a tu correo. Gracias!");window.location.href = "../html/ubicaciones.html#formulario";</script>';
    } else {
        echo '<script language="javascript">alert("Error al realizar la reserva.");window.location.href = "../html/ubicaciones.html#formulario";</script>' . $conn->error;
    }

    $conn->close();
} else {
    echo '<script language="javascript">alert("Metodo no permitido.");window.location.href = "../html/ubicaciones.html#formulario";</script>';
}
?>
