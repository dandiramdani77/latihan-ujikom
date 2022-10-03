<?php
include "koneksi.php";

$tgl_bayar= $_POST['tgl_bayar'];
$total_bayar = $_POST['total_bayar'];
$id_transaksi=$_POST['id_transaksi'];


		//perintah query SQL
$query = "INSERT into tbl_pembayaran(tgl_bayar,total_bayar,id_transaksi) Values('$tgl_bayar','$total_bayar','$id_transaksi')";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);

		if($perintah)
		{
			echo "Data sukses tersimpan pada database";
			header("location:pembayaran_tampil.php");
		}else
		{
			echo "Data Gagal Tersimpan";
		}


?>