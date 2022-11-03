<?php
    $koneksi =mysqli_connect('localhost','root','','pw2pagi');
    $query="insert into karyawan values('$_POST[NIK]','$_POST[nama]','$_POST[Kode_Departemen]','$_POST[Gender]','$_POST[Gaji_Pokok]','$_POST[Tunjangan]')";
    mysqli_query ($koneksi, $query);
    header("Location:index.php");
?>