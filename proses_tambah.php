<?php
include 'koneksi.php';
print_r($_POST);

$id_anggota = $_POST["id_anggota"];
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$sex = $_POST["sex"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$tgl_entry = $_POST["tgl_entry"];
$role = $_POST["role"];

$result = mysqli_query($conn, "INSERT INTO `anggota` (`id_anggota`, `nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`, `tgl_entry`, `role`) VALUES ('$id', '$nama', '$username', '$password', '$sex', '$telp', '$alamat', '$email', '$tgl_entry', '$role')");


header("Location:index.php");

?>