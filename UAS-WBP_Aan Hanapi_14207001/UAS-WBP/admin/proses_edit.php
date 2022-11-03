<?php
    $koneksi = mysqli_connect('localhost','root','','pw2pagi');
    $query="update karyawan set NIK = 
    '$_POST[NIK]' where NIK = '$_POST[NIK]'";
    mysqli_query($koneksi,$query);
    header("Location:index.php");
?>