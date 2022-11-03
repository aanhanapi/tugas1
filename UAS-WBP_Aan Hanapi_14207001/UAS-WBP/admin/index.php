<!-- <?php
session_start();
if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
header('location:login.php');
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <title>Aplikasi karyawan</title>
</head>
<body>
    
    <?php 
    include "./navbar.php";
    ?>
    
    <div class="container">
        <div class="card mt-3">

        <div class="card-body">
        <h1>List karyawan</h1>
            <table class="table table-responsive" id="tabel-data">
            
            <thead class="thead-light">
                <tr class="text-center">
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kode Departemen</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Tunjangan</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
			<a href="tambah.php" type="button" class="btn btn-success mb-2" style="float: right;"><i class="bi bi-plus"></i></a>
                <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT * FROM karyawan");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                        <td><?php echo $d['NIK']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['Kode_Departemen']; ?></td>
                        <td><?php echo $d['Gender']; ?></td>
                        <td><?php echo $d['Gaji_Pokok']; ?></td>
                        <td><?php echo $d['Tunjangan']; ?></td>
                        <td class="col-2">
                            <a class="btn btn-sm btn-warning" href="edit.php?nik=<?php echo $d['NIK']; ?>"><i class="bi bi-pencil"></i></a>
                            <a class="btn btn-sm btn-danger" href="hapus.php?nik=<?php echo $d['NIK']; ?>"  onClick="return confirm('Apakah Anda yakin akan menghapusnya?')"><i class="bi bi-trash"></i></a>
                            
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
            </table>
        </div>
    </div>

    </div>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
    </script>
</body>
</html>