<?php

include "koneksi.php";


$query="SELECT * FROM tbl_pembayaran";
$perintah=mysqli_query($conn,$query);

echo "<h2 align='center'>DAFTAR PEMBAYARAN</h2>";
echo "<a href='pembayaran.php'>[ + ] Tambah Data</a>";
echo"<table border='1' width='600' cellpadding='10' cellspacing='0'>
       <tr>
          <th>No.</th>
          <th>Tanggal Bayar</th>
          <th>Total Bayar</th>
          <th>ID Transaksi</th>
		  <th>AKSI</th>
       </tr>";

$no=1;
while($baris=mysqli_fetch_array($perintah))  
	{
		echo "<tr>
		        <td>$no</td>		      
		        <td>".$baris['tgl_bayar']."</td>
		        <td>".$baris['total_bayar']."</td>
		        <td>".$baris['id_transaksi']."</td>
		        <td>
		   <a href='pembayaran_delete.php?nomor=".$baris['id_pembayaran']."'>HAPUS</a> |
		   <a href='pembayaran_edit_form.php?nomor=".$baris['id_pembayaran']."'>EDIT</a>
		    </td>
		    </tr>";

$no++;
	}
echo "</table>";
?>