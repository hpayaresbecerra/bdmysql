<?php
$servername = "bzk5ucjhwvkno7rqxxdn-mysql.services.clever-cloud.com";
$username = "u6s0zp4emjdyolkq";
$password = "WCrdsFA3N1IbZckIEkGP";
$dbname = "bzk5ucjhwvkno7rqxxdn";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
