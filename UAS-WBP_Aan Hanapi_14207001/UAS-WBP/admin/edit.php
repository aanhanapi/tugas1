<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
	</head>

<body>
	<br/>
	<br/>
	<center>
        <h2>UBAH DATA</h2>
       	</center>	
	<br/>
<?php
    $koneksi = mysqli_connect('localhost','root','','pw2pagi');
    $query="select * from karyawan where nik = '$_GET[nik]'";
    $hasil=mysqli_query($koneksi,$query);
    $baris = mysqli_fetch_array($hasil);
?>
<form action="proses_edit.php" method="post">
        <center><table>
            <tr><td>NIK</td><td><input type="text" name="NIK" value="<?php echo $baris[0]?>"></td></tr>
            <tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $baris[1]?>"></td></tr>
            <tr><td>Kode Departemen </td><td><input type="text" name="Kode_Departemen" value="<?php echo $baris[2]?>"></td></tr>
            <tr><td>Gender </td><td><input type="text" name="Gender" value="<?php echo $baris[3]?>"></td></tr>
            <tr><td>Gaji_Pokok </td><td><input type="text" name="Gaji_Pokok" value="<?php echo $baris[4]?>"></td></tr>
            <tr><td>Tunjangan</td><td> <input type="text" name="Tunjangan"value="<?php echo $baris[5]?>"></td></tr>
            <tr><td><input type="submit" value="Ubah" class="tombol" style="float: right; background :#FF1493; color:aliceblue; border-radius: 15px" onClick="return confirm('data berhasil diubah?')">
            <?php 
$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
?>
<a href="<?=$url?>"> <input type="button" Value="Kembali" class="tombol" style="float: right; background :blue; color:aliceblue; border-radius: 15px";onClick="return confirm('Yakin mo balikan?')"></a></td></tr>
	<tr><td>
    </table>
    </center>
    </table>
    </center>
</form>