<?php 
// koneksi database
include('../koneksi.php');
 
// menangkap data id yang di kirim dari url
$NIK = $_GET['NIK'];
 
// menghapus data ke database
mysqli_query($koneksi,"delete from karyawan where NIK='$NIK'");
 
// mengalihkan halaman kembali utama
header("location:index.php");
 
?>
