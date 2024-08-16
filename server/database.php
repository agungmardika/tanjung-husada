<?php
$servername = "localhost";
$username = "root";
$password = "production";
$dbname = "tanjung_husada";
$port = 3316;

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
