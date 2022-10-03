<?php
include "koneksi.php";

$n = $_GET['nomor'];

$query="delete from tbl_pembeli where id_pembeli='$n'";

$perintah=mysqli_query($conn,$query);

if($perintah)
		{
		echo "<script> window.alert('Data Sukses Terhapus'); window.location='pembeli_tampil.php';</script>";
		}else
		{
			echo "Data Gagal Terhapus";
		}

?>