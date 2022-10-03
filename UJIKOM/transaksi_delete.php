<?php
include "koneksi.php";

$n = $_GET['id_transaksi'];

$query="delete from tbl_transaksi where id_transaksi='$n'";

$perintah=mysqli_query($conn,$query);

if($perintah)
		{
		echo "<script> window.alert('Data Sukses Terhapus'); window.location='transaksi_tampil.php';</script>";
		}else
		{
			echo "Data Gagal Terhapus";
		}

?>