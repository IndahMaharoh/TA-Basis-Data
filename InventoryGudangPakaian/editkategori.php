<br>
<br>
<h1 align="center"; style="font-size: 20px;">Halaman Kategori</h1>
<br>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Update Data Kategori Barang</h2>
<?php
	include "koneksi.php";
	$NL=@$_GET['id_kategori'];
	$sql = mysqli_query($koneksi, "select * from kategori where id_kategori = '$NL' ") or die(mysql_error());
	$data=mysqli_fetch_array($sql);
?>
<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Kategori</td>
				<td>:</td>
				<td><input type="text" name="id_kategori" value="<?php echo $data['id_kategori'];?>" disabled="disabled"></td>
			</tr>
			<tr>
				<td>Jenis Kategori</td>
				<td>:</td>
				<td><input type="text" name="jenis_kategori" value="<?php echo $data['jenis_kategori'];?>"></td>
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
		$jenis_kategori = @$_POST['jenis_kategori'];
		$edit_kategori = @$_POST['update'];
		if($edit_kategori){
			if ($jenis_kategori=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "update kategori set jenis_kategori = '$jenis_kategori' where id_kategori = '$NL'") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Update Data Kategori Berhasil");
					window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=kategori");
				</script>
				<?php
			}
		}
	?>
</fieldset><a href="index.php"></a>