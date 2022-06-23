<br>
<br>
<h1 align="center"; style="font-size: 20px;">Halaman Jenis Produk</h1>
<br>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Update Data Jenis Produk</h2>
<?php
	include "koneksi.php";
	$NL=@$_GET['id_jenis_produk'];
	$sql = mysqli_query($koneksi, "select * from jenis_produk where id_jenis_produk = '$NL' ") or die(mysql_error());
	$data=mysqli_fetch_array($sql);
?>
<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Jenis Produk</td>
				<td>:</td>
				<td><input type="text" name="id_jenis_produk" value="<?php echo $data['id_jenis_produk'];?>" disabled="disabled"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><input type="text" name="jenis" value="<?php echo $data['jenis'];?>"></td>
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
		$jenisproduk = @$_POST['jenis'];
		$edit_jproduk = @$_POST['update'];
		if($edit_jproduk){
			if ($jenisproduk=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "update jenis_produk set jenis = '$jenisproduk' where id_jenis_produk = '$NL'") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Update Data Jenis Produk Berhasil");
					window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=jproduk");
				</script>
				<?php
			}
		}
	?>
</fieldset>