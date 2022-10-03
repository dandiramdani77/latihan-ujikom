<?php
include "koneksi.php";

$n = $_GET['nomor'];

$query="delete from tbl_pembayaran where id_pembayaran='$n'";

$perintah=mysqli_query($conn,$query);

if($perintah)
		{
		echo "<script> window.alert('Data Sukses Terhapus'); window.location='pembayaran_tampil.php';</script>";
		}else
		{
			echo "Data Gagal Terhapus";
		}

?>