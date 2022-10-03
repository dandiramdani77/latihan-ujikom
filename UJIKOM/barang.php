
<form method="post" action="barang_proses.php">
<table>
<tr>
	<td colspan="2" align="center">FORM DATA Barang</td>
</tr>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" size="50" name="nama"placeholder="Nama Barang"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" size="50" name="harga"placeholder="Harga"></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" size="50" name="stok"placeholder="Stok"></td>
	</tr>
	<tr>
		<td>Supplier</td>
		<td> <select name="id_supplier"> 
					<?php
					include "koneksi.php";
						$query= mysqli_query($conn, "SELECT * FROM tbl_supplier");

						while($data =mysqli_fetch_assoc($query)){

							echo "<option $select value=".$data['id_supplier'].">".$data['id_supplier']." - ".$data['nama_supplier']."</option>";
						}
					?>
					</select>
				</td>
	</tr>
<tr>
	<td colspan="2" align="right"><input type="submit" value="SIMPAN" ></td>
</tr>
</table>

</form>