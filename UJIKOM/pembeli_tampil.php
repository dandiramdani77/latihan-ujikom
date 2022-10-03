<?php

include "koneksi.php";


$query="SELECT * FROM tbl_pembeli";
$perintah=mysqli_query($conn,$query);

echo "<h2 align='center'>DAFTAR PEMBELI</h2>";
echo "<a href='pembeli.php'>[ + ] Tambah Data</a>";
echo"<table border='1' width='600' cellpadding='10' cellspacing='0'>
       <tr>
          <th>No.</th>
          <th>Nama Pembeli</th>
          <th>Jenis Kelamin</th>
          <th>No Telp</th>
          <th>Alamat</th>
		  <th>AKSI</th>
       </tr>";

$no=1;
while($baris=mysqli_fetch_array($perintah))  
	{
		echo "<tr>
		        <td>$no</td>		      
		        <td>".$baris['nama_pembeli']."</td>
		        <td>".$baris['jk']."</td>
		        <td>".$baris['no_telp']."</td>
				<td>".$baris['alamat']."</td>
		        <td> 
		   <a href='pembeli_delete.php?nomor=".$baris['id_pembeli']."'>HAPUS</a> |
		   <a href='pembeli_edit_form.php?nomor=".$baris['id_pembeli']."'>EDIT</a>
		        </td>
		      </tr>";

$no++;
	}
echo "</table>";
?>