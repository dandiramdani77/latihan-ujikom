
<form method="post" action="transaksi_proses.php">
<table>
<tr>
	<td colspan="2" align="center">FORM DATA TRANSAKSI</td>
</tr>
<tr>
		<td>Barang</td>
		<td> <select name="id_barang"> 
					<?php
					include "koneksi.php";
						$query= mysqli_query($conn, "SELECT * FROM tbl_barang");

						while($data =mysqli_fetch_assoc($query)){

							echo "<option $select value=".$data['id_barang'].">".$data['id_barang']." - ".$data['nama_barang']."</option>";
						}
					?>
					</select>
				</td>
	</tr>
	<tr>
		<td>Pembeli</td>
		<td> <select name="id_pembeli"> 
					<?php
					include "koneksi.php";
						$query= mysqli_query($conn, "SELECT * FROM tbl_pembeli");
						while($data =mysqli_fetch_assoc($query)){

							echo "<option $select value=".$data['id_pembeli'].">".$data['id_pembeli']." - ".$data['nama_pembeli']."</option>";
						}
					?>
					</select>
				</td>
	</tr>
    <tr>
		<td>Tanggal</td>
		<td><input type="date" size="50" name="tanggal"placeholder="tanggal"></td>
	</tr>
    <tr>
		<td>Keterangan</td>
		<td><input type="text" size="50" name="keterangan"placeholder="keterangan"></td>
	</tr>
<tr>
    
	<td colspan="2" align="right"><input type="submit" value="SIMPAN" ></td>
</tr>
</table>

</form