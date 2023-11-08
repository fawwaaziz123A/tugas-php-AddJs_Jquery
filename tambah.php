<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

  <form action="proses_tambah.php" method="post" id="tambahForm">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="text" disabled name="id"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" id="password"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="sex" id="sex"></td>
        </tr>
        <tr>
            <td>Telpon</td>
            <td>:</td>
            <td><input type="text" name="telp" id="telp"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Tanggal_entry</td>
            <td>:</td>
            <td><input type="datetime-local" name="tgl_entry" id="tgl_entry"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td><input type="text" name="role" id="role"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>

  <script>
    $(document).ready(function() {
        $("#tambahForm").submit(function(e) {
            if ($("#nama").val() === "" || $("#username").val() === "" || $("#password").val() === "" || $("#sex").val() === "" || $("#telp").val() === "" || $("#alamat").val() === "" || $("#email").val() === "" || $("#tgl_entry").val() === "" || $("#role").val() === "") {
                alert("Semua bidang harus diisi.");
                e.preventDefault(); // Mencegah pengiriman formulir jika ada bidang yang kosong.
            }
        });
    });
  </script>
</body>
</html>
