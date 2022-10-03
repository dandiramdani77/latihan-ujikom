
<?php
include "koneksi.php";

$n = $_GET['id_transaksi'];

$query = "select * from tbl_transaksi where id_transaksi='$n'";

$perintah = mysqli_query($conn, $query);

$baris = mysqli_fetch_array($perintah);

?>

<h2> FORM EDIT TRANSAKSI </h2>

<form method="post" action="transaksi_edit.php">
	<table>
	<tr>
			<td >NOMOR ID</td>
			<td>:<input type="text" name="id" size="50"  
				value="<?php echo $baris['id_transaksi'];?> ">
			</td>
		</tr>
		<tr>
			<td >Nama Barang </td>
			<td>: <input type="text" name="id_barang" size="50"  
				value="<?php echo $baris['id_barang'];?> ">
		<tr>
			<td>Nama Pembeli </td>
			<td>: 
				<input type="text" name="id_pembeli" size="50"  
				value="<?php echo $baris['id_pembeli']; ?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>: 
				<input type="date" name="tanggal"  size="50" 
				value="<?php echo $baris['tanggal']; ?>">
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>: 
				<input type="text" name="keterangan"  size="50" 
				value="<?php echo $baris['keterangan']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="EDIT">
			</td>
		</tr>


	</table>
