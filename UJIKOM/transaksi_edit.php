<?php 
include "koneksi.php";

//deklarasi variabel
$n = $_POST['id'];
$id_barang 		= $_POST['id_barang'];
$id_pembeli		= $_POST['id_pembeli'];
$tanggal	= $_POST['tanggal'];
$keterangan = $_POST['keterangan'];

		$query = "UPDATE tbl_transaksi set 
					   id_barang='$id_barang',
					   id_pembeli = '$id_pembeli',
					   tanggal='$tanggal',
					   keterangan='$keterangan'
					 WHERE id_transaksi='$n'";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);
		if($perintah)
		{
			//echo "Data sukses tersimpan pada database";
			header("location:transaksi_tampil.php");
			
		}else
		{
			echo "Data Gagal Terupdate";
		}


?>