<?php
include("connect.php"); //koneksi ke database


//variabel untuk menampung data yang di inputkan
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$deskripsi = $_POST["deskripsi"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$berat = $_POST["berat"];


//kondisi jika data kosong harus diisi  dulu
if (trim($kode)=="") {
		echo "Nama masih kosong , isi dengan benar :#";
		}
	elseif (trim($nama)=="") {
		echo "Nama masih kosong , isi dengan benar :#";
		}
	elseif (trim($deskripsi)=="") {
		echo "Nama masih kosong , isi dengan benar :#";
		}
	elseif (trim($stok)=="") {
		echo "Nama masih kosong , isi dengan benar :#";
		}
	elseif (trim($harga)=="") {
		echo "Nama masih kosong , isi dengan benar :#";
		}

	elseif (trim($berat)=="") {
		echo "Nama masih kosong , isi dengan benar :#";
		}

	else {
	 $input = "insert into barang (kode,nama,deskripsi,stok,harga,berat)
		values ('$kode','$nama','$deskripsi','$stok','$harga','$berat')";
	 $hasil = mysql_query($input,$conn);
	 header ("location:barang.php");
		}

?>