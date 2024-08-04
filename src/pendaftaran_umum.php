<?php
include 'database.php';

$nama = htmlspecialchars($_POST['nama']);
$nama_orang_tua = htmlspecialchars($_POST['nama_orang_tua']);
$nik = htmlspecialchars($_POST['nik']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_telepon = htmlspecialchars($_POST['no_telepon']);
$perusahaan = htmlspecialchars($_POST['perusahaan']);

$sql = "INSERT INTO pendaftaran_umum (nama, nama_orang_tua, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, no_telepon, perusahaan)
        VALUES ('$nama', '$nama_orang_tua', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$no_telepon', '$perusahaan')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Pendaftaran Berhasil');
        window.location.href = 'index.html';
    </script>";
} else {
    $error = $conn->error;
    echo "<script>
        alert('Pendaftaran Gagal: $error');
        window.location.href = 'index.html';
    </script>";
}

$conn->close();
