<?php 
include "koneksi.php";

//deklarasi variabel
$id 	= $_POST['id'];
$nama 	= $_POST['nama'];
$telp 	= $_POST['no_telp'];
$alamat 	= $_POST['alamat'];

		$query = "UPDATE tbl_supplier set 
					   nama_supplier='$nama',
					   no_telp = '$telp',
					   alamat='$alamat'
					 WHERE id_supplier='$id'";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);
		if($perintah)
		{
			//echo "Data sukses tersimpan pada database";
			header("location:supplier_tampil.php");
			
		}else
		{
			echo "Data Gagal Terupdate";
		}


?>