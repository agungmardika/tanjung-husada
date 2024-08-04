<?php
include 'database.php';

// Mengambil data dari form
$nama = htmlspecialchars($_POST['nama']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
$nik = htmlspecialchars($_POST['nik']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$umur = htmlspecialchars($_POST['umur']);
$alamat = htmlspecialchars($_POST['alamat']);
$telepon = htmlspecialchars($_POST['telepon']);

// Query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO pendaftaran_mcu (nama, tempat_lahir, tanggal_lahir, nik, jenis_kelamin, umur, alamat, telepon)
        VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$nik', '$jenis_kelamin', '$umur', '$alamat', '$telepon')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
