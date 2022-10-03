
<?php
include "koneksi.php";

$id = $_GET['nomor'];

$query = "select * from tbl_barang where id_barang='$id'";

$perintah = mysqli_query($conn, $query);

$baris = mysqli_fetch_array($perintah);

?>

<h2> FORM EDIT BARANG </h2>

<form method="post" action="barang_edit.php">
	<table>
		<tr>
			<td >NOMOR ID  </td>
			<td>: <input type="text" name="id" size="50"  
				value="<?php echo $baris['id_barang'];?> ">
		<tr>
			<td>Nama Barang </td>
			<td>: 
				<input type="text" name="nama" size="50"  
				value="<?php echo $baris['nama_barang']; ?>">
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>: 
				<input type="text" name="harga"  size="50" 
				value="<?php echo $baris['harga']; ?>">
			</td>
		</tr>
		<tr>
			<td>Stok</td>
			<td>: 
				<input type="text" name="stok"  size="50" 
				value="<?php echo $baris['stok']; ?>">
			</td>
		</tr>
		<tr>
			<td>Supplier </td>
			<td>: 
			<select name="id_Supplier"> 
					<?php
						$query_supplier = mysqli_query($conn, "SELECT * FROM tbl_supplier");

						while($datas =mysqli_fetch_array($query_supplier)){

							if($datas['id_supplier'] == $baris['id_supplier'] ){
								$select ="selected";
							}else
							{
								$select="";
							}

							echo "<option $select value=".$datas['id_supplier'].">".$datas['id_supplier']."-".$datas['nama_supplier']."</option>";
						}
					?>
					</select>



			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="EDIT">
			</td>
		</tr>


	</table>
