<?php

include "koneksi.php";

$query="SELECT * FROM tbl_transaksi";
$perintah=mysqli_query($conn,$query);

echo "<h2 align='center'>DAFTAR TRANSAKSI</h2>";

echo "<a href='transaksi.php'>[ + ] Tambah Data</a>";
echo"<table border='1' width='600' cellpadding='10' cellspacing='0'>
       <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Nama Pembeli</th>
          <th>Tanggal</th>
          <th>Keterangan</th>
          <th>AKSI</th>
       </tr>";

$no=1;
while($baris=mysqli_fetch_array($perintah))  
	{
		$query1= mysqli_query($conn, "SELECT * FROM tbl_barang WHERE id_barang=$baris[id_barang]");

				while($data =mysqli_fetch_assoc($query1)){
				$nama_barang=$data['nama_barang'];
				}
				$query2= mysqli_query($conn, "SELECT * FROM tbl_pembeli WHERE id_pembeli=$baris[id_pembeli]");

				while($data =mysqli_fetch_assoc($query2)){
				$nama_pembeli=$data['nama_pembeli'];
				}
		echo "<tr>
		        <td>$no</td>		      

		        <td>[".$baris['id_barang']. "] ".$nama_barang."</td>
		        <td>[".$baris['id_pembeli']. "] ".$nama_pembeli."</td>
		        <td>".$baris['tanggal']."</td>
		        <td>".$baris['keterangan']."</td>
		        <td> 
		   <a href='transaksi_delete.php?id_transaksi=".$baris['id_transaksi']."'>HAPUS</a> |
		   <a href='transaksi_edit_form.php?id_transaksi=".$baris['id_transaksi']."'>EDIT</a>
		        </td>
		      </tr>";

$no++;
	}
echo "</table>";
?>