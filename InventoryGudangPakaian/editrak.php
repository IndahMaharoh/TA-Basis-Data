<br>
<br>
<h1 align="center"; style="font-size: 20px;">Halaman Rak</h1>
<br>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Update Data Rak</h2>
<?php
	include "koneksi.php";
	$NL=@$_GET['id_rak'];
	$sql = mysqli_query($koneksi, "select * from rak where id_rak = '$NL' ") or die(mysql_error());
	$data=mysqli_fetch_array($sql);
?>
<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Rak</td>
				<td>:</td>
				<td><input type="int" name="id_rak" value="<?php echo $data['id_rak'];?>" disabled="disabled"></td>
			</tr>
			<tr>
				<td>Id Produk</td>
				<td>:</td>
				<td><input type="int" name="id_produk" value="<?php echo $data['id_produk'];?>"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td>:</td>
				<td><input type="text" name="lokasi" value="<?php echo $data['lokasi'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="update" value="Update"> <input type="reset" name="reset" value="Batal"></td>
			</tr>
		</table>
	</form>
	<?php
		include "koneksi.php";
		$id_produk = @$_POST['id_produk'];
		$lokasi = @$_POST['lokasi'];
		$edit_rak = @$_POST['update'];
		if($edit_rak){
			if ($id_produk=="" || $lokasi=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "update rak set id_produk = '$id_produk' where id_rak = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update rak set lokasi = '$lokasi' where id_rak = '$NL'") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Update Data Layanan Berhasil");
					window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=rak");
				</script>
				<?php
			}
		}
	?>
</fieldset>