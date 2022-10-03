<?php
include "koneksi.php";

$nama_pembeli= $_POST['nama_pembeli'];
$jk = $_POST['jk'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];

		//perintah query SQL
$query = "INSERT into tbl_pembeli(nama_pembeli,jk,no_telp,alamat) Values('$nama_pembeli','$jk','$no_telp','$alamat')";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);

		if($perintah)
		{
			echo "Data sukses tersimpan pada database";
			header("location:pembeli_tampil.php");
		}else
		{
			echo "Data Gagal Tersimpan";
		}


?>