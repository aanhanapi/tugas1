<?php
    $koneksi = mysqli_connect ("localhost","root","","pw2");
    $query="insert into mahasiswa value('$_POST[id]','$_POST[nama]')";
    mysqli_query($koneksi,$query);
    header("location:mahasiswa.php");
?>