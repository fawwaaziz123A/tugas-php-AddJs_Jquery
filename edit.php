<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <?php
    include 'koneksi.php';

    $anggota = mysqli_query($conn, "SELECT * FROM anggota WHERE nama = '$_GET[nama]'");

    while($b = mysqli_fetch_array($anggota)){
        $id = $b["id_anggota"];
        $nama= $b["nama"];
        $username = $b["username"];
        $password = $b["password"];
        $sex = $b["sex"];
        $telp = $b["telp"];
        $alamat = $b["alamat"];
        $email = $b["email"];
        $tgl_entry = $b["tgl_entry"];
        $role = $b["role"];
    }
  ?>
  <form action="proses_edit.php?nama=<?php echo $nama?>" method="post" enctype="multipart/form-data" id="editForm">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="text" name="id_anggota" disabled value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" value="<?php echo $nama ?>"></td>
        </tr>
        <!-- Tambahkan ID pada setiap input untuk mempermudah pemilihan -->
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" id="username" value="<?php echo $username ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" id="password" value="<?php echo $password ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="sex" id="sex" value="<?php echo $sex ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="text" name="telp" id="telp" value="<?php echo $telp ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" id="email" value="<?php echo $email ?>"></td>
        </tr>
        <tr>
            <td>Tanggal_Entry</td>
            <td>:</td>
            <td><input type="datetime-local" name="tgl_entry" id="tgl_entry" value="<?php echo $tgl_entry ?>"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td><input type="text" name="role" id="role" value="<?php echo $role ?>"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>

  <script>
    $(document).ready(function() {
        $("#editForm").submit(function(e) {
            if ($("#nama").val() === "" || $("#username").val() === "" || $("#password").val() === "" || $("#sex").val() === "" || $("#telp").val() === "" || $("#alamat").val() === "" || $("#email").val() === "" || $("#tgl_entry").val() === "" || $("#role").val() === "") {
                alert("Semua bidang harus diisi.");
                e.preventDefault(); // Mencegah pengiriman formulir jika ada bidang yang kosong.
            }
        });
    });
  </script>
</body>
</html>
