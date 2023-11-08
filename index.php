<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Fawwaz Aziz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM `anggota`ORDER BY id_anggota ASC ");
                ?>
                <div class="card" >
                    <div class="card-header">
                        <center>
                            <h1>DATA ANGGOTA</h1>
                        </center>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-info" style="margin-bottom:10px" href="tambah.php?tambah=Nama Customer">
                            Tambah Data </a>
                            <table class="table table-bordered table-striped table-primary" id="myTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Telpon</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Tanggal_entry</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query) > 0) {
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $data["id_anggota"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["nama"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["username"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["password"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["sex"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["telp"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["alamat"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["email"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["tgl_entry"] ?>
                                            </td>
                                            <td>
                                                <?php echo $data["role"] ?>
                                            </td>
                                            <td>
                                                <a href="proses_hapus.php?nama=<?php echo $data["nama"] ?>"
                                                    class="btn btn-danger"> Delete
                                                </a> &nbsp;
                                                <a href="edit.php?nama=<?php echo $data["nama"] ?>"
                                                    class="btn btn-warning">
                                                    Ubah
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "searching": true // Aktifkan fitur pencarian
            });
        });
    </script>
</body>

</html>
