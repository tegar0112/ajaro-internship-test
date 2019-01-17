<html>
      <head>
      <title><p align="center">Kelola Data Barang</title>
      </head>
		
	  <body>
	  <p align="center"> KELOLA DATA BARANG 
		<br>
		<br>
		<br>
       <table width=80% height=5% align="center">
		<tr>
			<td><b>Data Barang</b></td>
			<td><p align="right"><a href ="input.php"><button class="btn">Tambah</button></a>
		</tr>
	   </table>
	   <br>
	   
	   <table width=80% height=40% align="center" border = 1 cellpadding=0 cellspacing=0>
	    <tr align = "center">
			<td>Kode</td>
			<td>Nama</td>
			<td>Harga</td>
			<td>Aksi</td>
		</tr>
		
		<?php
			//koneksi ke database
			include ("connect.php");
			$tampil = mysql_query ('select * from barang');
			while($data = mysql_fetch_array($tampil)){
			?>
			
			<tr align = "center">
				<td><?php echo $data['kode']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['harga']; ?></td>
				<td> <a href = "edit.php? id=<?php echo $data ['id']; ?>"> Edit </a> | 
				<a href="hapus.php?id=<?php echo $data ['id']; ?>">Delete</a></td>
			</tr>
		
		<?php
			}
		?>
		
		<?php session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }
require_once("config.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
		</table >
		
		<table height=20% align="center" border = 0 cellpadding=0 cellspacing=0>
		<tr>
		<td> <a href="logout.php"> <button>LOG UOT</button> </a>
		</tr>
		</table>
      </body>
</html>