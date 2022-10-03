<?php
include "koneksi.php";

$n = $_GET['nomor'];

$query="delete from tbl_supplier where id_supplier='$n'";

$perintah=mysqli_query($conn,$query);

if($perintah)
		{
		echo "<script> window.alert('Data Sukses Terhapus'); window.location='supplier_tampil.php';</script>";
		}else
		{
			echo "Data Gagal Terhapus";
		}

?>