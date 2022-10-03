<?php 
include "koneksi.php";

//deklarasi variabel
$nama_pembeli= $_POST['nama_pembeli'];
$jk = $_POST['jk'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];
$id_pembeli=$_POST['id_pembeli'];


		$query = "UPDATE tbl_pembeli set 
					   nama_pembeli='$nama_pembeli',
					   jk = '$jk',
					   no_telp='$no_telp',
					   alamat='$alamat'
					 WHERE id_pembeli='$id_pembeli'";

		//perintah menjalankan query sql pada php
		$perintah = mysqli_query($conn, $query);
		if($perintah)
		{
			//echo "Data sukses tersimpan pada database";
			header("location:pembeli_tampil.php");
			
		}else
		{
			echo "Data Gagal Terupdate";
		}


?>