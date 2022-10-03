<?php 
include "koneksi.php";

//deklarasi variabel
$id 	= $_POST['id'];
$nama 	= $_POST['nama'];
$harga 	= $_POST['harga'];
$stok 	= $_POST['stok'];
$idsup 	= $_POST['id_supplier'];

		$query = "UPDATE tbl_barang set 
					   nama_barang='$nama',
					   harga = '$harga',
					   stok='$stok',
					   id_supplier='$idsup'
					 WHERE id_barang='$id'";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);
		if($perintah)
		{
			//echo "Data sukses tersimpan pada database";
			header("location:barang_tampil.php");
			
		}else
		{
			echo "Data Gagal Terupdate";
		}


?>