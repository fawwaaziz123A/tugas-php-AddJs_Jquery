<?php 
include 'koneksi.php';
date_default_timezone_set('Asia/Jakarta');

// get variable from form input
// $id_anggota = $_POST["id_anggota"];
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$sex = $_POST["sex"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$tgl_entry = $_POST["tgl_entry"];
$role = $_POST["role"];


$result = mysqli_query($conn, "UPDATE `anggota` SET `nama` = '$nama', `username` = '$username', `password` = '$password', `sex` = '$sex', `telp` = '$telp', `alamat` = '$alamat', `email` = '$email', `tgl_entry` = '$tgl_entry', `role` = '$role' WHERE `nama` = '$_GET[nama]'");


header("Location:index.php");

?>