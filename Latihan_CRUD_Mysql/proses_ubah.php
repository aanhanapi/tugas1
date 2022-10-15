<?php
    $koneksi = mysqli_connect ("localhost","root","","pw2");
    $query="update mahasiswa set nama= '$_POST[nama]' where id '$_POST[id]'";
    mysqli_query($koneksi,$query);
    header("location:mahasiswa.php");
?>