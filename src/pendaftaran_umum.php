<?php
include 'database.php';

// Mengambil data dari form
$nama = $_POST['nama'];
$nama_orang_tua = $_POST['nama_orang_tua'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$perusahaan = $_POST['perusahaan'];

// Query untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO pendaftaran_umum (nama, nama_orang_tua, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, no_telepon, perusahaan)
        VALUES ('$nama', '$nama_orang_tua', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$no_telepon', '$perusahaan')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
