
<?php
include "koneksi.php";

$id = $_GET['nomor'];

$query = "select * from tbl_pembayaran where id_pembayaran='$id'";


$perintah = mysqli_query($conn, $query);

$baris = mysqli_fetch_array($perintah);

?>

<h2> FORM EDIT PEMBAYARAN</h2>

<form method="post" action="pembayaran_edit.php">
	<table>
		<tr>
			<td >Tanggal Bayar</td>
			<td>:<input type="date" name="tgl_bayar" size="50"  
				value="<?php echo $baris['tgl_bayar'];?> ">
			</td>
		</tr>
		<tr>
			<td>Total Bayar</td>
			<td>: 
				<input type="text" name="total_bayar" size="50"  
				value="<?php echo $baris['total_bayar']; ?>">
			</td>
		</tr>
		<tr>
			<td>ID Transaksi</td>
			<td>: 
			<select name="id_transaksi"> 
					<?php
						$query_supplier = mysqli_query($conn, "SELECT * FROM tbl_transaksi");

						while($datas =mysqli_fetch_array($query_supplier)){

							if($datas['id_transaksi'] == $baris['id_transaksi'] ){
								$select ="selected";
							}else
							{
								$select="";
							}

							echo "<option $select value=".$datas['id_transaksi'].">".$datas['id_transaksi']."</option>";
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
