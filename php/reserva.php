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

    // Consulta a la tabla
    $sql = "INSERT INTO reservas (nombre, personas, correo) VALUES ('$nombre', $personas, '$correo')";

    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">alert("Reservacion hecha, enviamos informacion a tu correo. Gracias!");window.location.href = "../html/index.html";</script>';    } else {
        echo "Error al realizar la reserva: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Método no permitido";
}
?>
