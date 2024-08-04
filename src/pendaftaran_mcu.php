<?php
include 'database.php';

// Mengambil data dari form
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

// Query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO pendaftaran_mcu (nama, tempat_lahir, tanggal_lahir, nik, jenis_kelamin, umur, alamat, telepon)
        VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$nik', '$jenis_kelamin', '$umur', '$alamat', '$telepon')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
