<?php
include "koneksi.php";

$n = $_GET['nomor'];

$query="delete from tbl_barang where id_barang='$n'";

$perintah=mysqli_query($conn,$query);

if($perintah)
		{
		echo "<script> window.alert('Data Sukses Terhapus'); window.location='barang_tampil.php';</script>";
		}else
		{
			echo "Data Gagal Terhapus";
		}

?>