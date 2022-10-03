<?php 
include "koneksi.php";

//deklarasi variabel

$tgl_bayar= $_POST['tgl_bayar'];
$total_bayar = $_POST['total_bayar'];
$id_transaksi=$_POST['id_transaksi'];
$id_pembayaran=$_POST['id_pembayaran'];



		$query = "UPDATE tbl_pembayaran set 
					   tgl_bayar='$tgl_bayar',
					   total_bayar = '$total_bayar',
					   id_transaksi='$id_transaksi'
					 WHERE id_pembayaran='$id_pembayaran'";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);
		if($perintah)
		{
			//echo "Data sukses tersimpan pada database";
			header("location:pembayaran_tampil.php");
			
		}else
		{
			echo "Data Gagal Terupdate";
		}


?>