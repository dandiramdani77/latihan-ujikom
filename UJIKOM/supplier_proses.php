<?php
include "koneksi.php";

$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat=$_POST['alamat'];

		//perintah query SQL
$query = "INSERT into tbl_supplier(nama_supplier,no_telp,alamat) Values('$nama','$no_telp','$alamat')";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);

		if($perintah)
		{
			echo "Data sukses tersimpan pada database";
			header("location:supplier_tampil.php");
		}else
		{
			echo "Data Gagal Tersimpan";
		}


?>