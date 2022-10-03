
<?php
include "koneksi.php";

$n = $_GET['id_pembeli'];

$query = "select * from tbl_pembeli where id_pembeli='$n'";

$perintah = mysqli_query($conn, $query);

$baris = mysqli_fetch_array($perintah);

?>

<h2> FORM EDIT PEMBELI </h2>

<form method="post" action="pembeli_edit.php">
	<table>
		<tr>
			<td >NO ID</td>
			<td>:<input type="text" name="id_pembeli" size="50"  
				value="<?php echo $baris['id_pembeli'];?> ">
			</td>
		</tr>
		<tr>
			<td>Nama Pembeli</td>
			<td>: 
				<input type="text" name="nama_pembeli" size="50"  
				value="<?php echo $baris['nama_pembeli']; ?>">
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: 
				<input type="text" name="jk"  size="50" 
				value="<?php echo $baris['jk']; ?>">
			</td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td>: <input type="text" name="no_telp" size="50" 
				value="<?php echo $baris['no_telp']; ?>">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <input type="text" name="alamat" size="50" 
				value="<?php echo $baris['alamat']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="EDIT">
			</td>
		</tr>


	</table>
