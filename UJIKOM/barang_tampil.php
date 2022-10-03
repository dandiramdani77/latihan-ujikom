<?php

include "koneksi.php";

$query="SELECT * FROM tbl_barang";
$perintah=mysqli_query($conn,$query);

echo "<h2 align='center'>DAFTAR Barang</h2>";

echo "<a href='barang.php'>[ + ] Tambah Data</a>";
echo"<table border='1' width='600' cellpadding='10' cellspacing='0'>
       <tr>
          <th>No.</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Supplier</th>
          <th>AKSI</th>
       </tr>";

$no=1;
while($baris=mysqli_fetch_array($perintah))  
	{
		echo "<tr>
		        <td>$no</td>		      
		        <td>".$baris['nama_barang']."</td>
		        <td>".$baris['harga']."</td>
		        <td>".$baris['stok']."</td>
		        <td>".$baris['id_supplier']."</td>
		        <td> 
		   <a href='barang_delete.php?nomor=".$baris['id_barang']."'>HAPUS</a> |
		   <a href='barang_edit_form.php?nomor=".$baris['id_barang']."'>EDIT</a>
		        </td>
		      </tr>";

$no++;
	}
echo "</table>";
?>