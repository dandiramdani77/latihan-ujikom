
<form method="post" action="pembayaran_proses.php">
<table>
<tr>
	<td colspan="2" align="center">FORM DATA PEMBAYARAN</td>
</tr>
	<tr>
		<td>Tanggal Bayar</td>
		<td><input type="date" size="50" name="tgl_bayar"placeholder="Tanggal Bayar"></td>
	</tr>
	<tr>
		<td>Total Bayar</td>
		<td><input type="text" size="50" name="total_bayar"placeholder="Total Bayar"></td>
	</tr>
	<tr>
		<td>ID Transaksi</td>
		<td> <select name="id_transaksi"> 
					<?php
					include "koneksi.php";
						$query= mysqli_query($conn, "SELECT * FROM tbl_transaksi");

						while($data =mysqli_fetch_assoc($query)){

							echo "<option $select value=".$data['id_transaksi'].">".$data['id_transaksi']."</option>";
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