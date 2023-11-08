<?php 
include 'koneksi.php';


$result = mysqli_query($conn, "DELETE from anggota where `nama` = '$_GET[nama]'");

header("Location:index.php");

?>