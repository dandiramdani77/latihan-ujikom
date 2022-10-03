<?php
include "koneksi.php";

$id_barang 		= $_POST['id_barang'];
$id_pembeli		= $_POST['id_pembeli'];
$tanggal	= $_POST['tanggal'];
$keterangan = $_POST['keterangan'];

		//perintah query SQL
$query = "INSERT into tbl_transaksi(id_barang,id_pembeli,tanggal,keterangan) Values('$id_barang','$id_pembeli','$tanggal','$keterangan')";



		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);

		if($perintah)
		{
			//echo "Data sukses tersimpan pada database";
			header("location:transaksi_tampil.php");
			
		}else
		{
			echo "Data Gagal Tersimpan";
		}


?>