
<?php
include "koneksi.php";

$id = $_GET['nomor'];

$query = "select * from tbl_supplier where id_supplier='$id'";

$perintah = mysqli_query($conn, $query);

$baris = mysqli_fetch_array($perintah);

?>

<h2> FORM EDIT SUPPLIER </h2>

<form method="post" action="supplier_edit.php">
	<table>
		<tr>
			<td >NOMOR ID  </td>
			<td>:<input type="text" name="id" size="50"  
				value="<?php echo $baris['id_supplier'];?> ">
			</td>
		</tr>
		<tr>
			<td>Nama Supplier </td>
			<td>: 
				<input type="text" name="nama" size="50"  
				value="<?php echo $baris['nama_supplier']; ?>">
			</td>
		</tr>
		<tr>
			<td>no Telp</td>
			<td>: 
				<input type="text" name="no_telp"  size="50" 
				value="<?php echo $baris['no_telp']; ?>">
			</td>
		</tr>
		<tr>
			<td>Alamat </td>
			<td>: <input type="text" name="alamat" size="50" 
				value="<?php echo $baris['alamat']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="EDIT">
			</td>
		</tr>


	</table>
