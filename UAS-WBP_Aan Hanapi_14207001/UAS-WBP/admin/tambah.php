<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	
	<center><h2>TAMBAH DATA</h2></center>
	<br/>
 
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	
	<form action="simpan.php" method="post">
    <center><table>
	<tr><td>NIK</td><td><input type="text" name="nik"></td></tr>
    <tr><td>Nama </td><td><input type="text" name="nama"></td></tr>
    <tr><td>Kode Departemen </td><td><input type="text" name="Kode_Departemen"></td></tr>
    <tr><td>Gender </td><td><input type="text" name="Gender"></td></tr>
    <tr><td>Gaji Pokok</td><td> <input type="text" name="Gaji_Pokok"></td></tr>
    <tr><td>Tunjangan </td><td><input type="text" name="Tunjangan"></td></tr>
    <tr><td><input  type="submit" value="simpan" class="tombol" style="float: right; background :green; color:aliceblue; border-radius: 15px">
	<?php 
		$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
		?>
		<a href="<?=$url?>"> <input type="button" Value="Kembali" class="tombol" style="float: right; background :blue; color:aliceblue; border-radius: 15px"></a></td></tr>
	<tr><td>
    </table>
    </center>
	</body>
</html>