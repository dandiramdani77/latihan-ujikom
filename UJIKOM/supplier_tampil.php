<?php

include "koneksi.php";


$query="SELECT * FROM tbl_supplier";
$perintah=mysqli_query($conn,$query);

echo "<h2 align='center'>DAFTAR Supplier</h2>";
echo "<a href='supplier.php'>[ + ] Tambah Data</a>";
echo"<table border='1' width='600' cellpadding='10' cellspacing='0'>
       <tr>
          <th>No.</th>
          <th>Nama Supplier</th>
          <th>No Telp</th>
          <th>Alamat</th>
          <th>AKSI</th>
       </tr>";

$no=1;
while($baris=mysqli_fetch_array($perintah))  
	{
		echo "<tr>
		        <td>$no</td>		      
		        <td>".$baris['nama_supplier']."</td>
		        <td>".$baris['no_telp']."</td>
		        <td>".$baris['alamat']."</td>
		        <td> 
		   <a href='supplier_delete.php?nomor=".$baris['id_supplier']."'>HAPUS</a> |
		   <a href='supplier_edit_form.php?nomor=".$baris['id_supplier']."'>EDIT</a>
		        </td>
		      </tr>";

$no++;
	}
echo "</table>";
?>