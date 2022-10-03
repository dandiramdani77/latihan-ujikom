<?php
include "koneksi.php";

$nama 		= $_POST['nama'];
$harga 		= $_POST['harga'];
$stok 		= $_POST['stok'];
$id_supplier = $_POST['id_supplier'];

		//perintah query SQL
$query = "INSERT into tbl_barang(nama_barang,harga,stok,id_supplier) Values('$nama','$harga','$stok','$id_supplier')";



		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);

		if($perintah)
		{
			//echo "Data sukses tersimpan pada database";
			header("location:barang_tampil.php");
			
		}else
		{
			echo "Data Gagal Tersimpan";
		}


?>