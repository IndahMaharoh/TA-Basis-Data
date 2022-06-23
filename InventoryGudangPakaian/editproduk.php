<br>
<br>
<h1 align="center"; style="font-size: 20px;">Halaman Produk</h1>
<br>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Update Data Produk</h2>
<?php
	include "koneksi.php";
	$NL=@$_GET['id_produk'];
	$sql = mysqli_query($koneksi, "select * from produk where id_produk = '$NL' ") or die(mysql_error());
	$data=mysqli_fetch_array($sql);
?>
<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Produk</td>
				<td>:</td>
				<td><input type="int" name="id_produk" value="<?php echo $data['id_produk'];?>" disabled="disabled"></td>
			</tr>
			<tr>
				<td> Id Kategori</td>
				<td>:</td>
				<td><input type="int" name="id_kategori" value="<?php echo $data['id_kategori'];?>"></td>
			</tr>
			<tr>
				<td> Id Jenis Produk</td>
				<td>:</td>
				<td><input type="int" name="id_jenis_produk" value="<?php echo $data['id_jenis_produk'];?>"></td>
			</tr>
			<tr>
				<td>Merk</td>
				<td>:</td>
				<td><input type="text" name="merk" value="<?php echo $data['merk'];?>"></td>
			</tr>
			<tr>
				<td>Id Warna</td>
				<td>:</td>
				<td><input type="int" name="id_warna" value="<?php echo $data['id_warna'];?>"></td>
			</tr>
			<tr>
				<td>Id Ukuran</td>
				<td>:</td>
				<td><input type="int" name="id_ukuran" value="<?php echo $data['id_ukuran'];?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok" value="<?php echo $data['stok'];?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>"></td>
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
		$id_kategori = @$_POST['id_kategori'];
		$id_jproduk = @$_POST['id_jenis_produk'];
		$merk = @$_POST['merk'];
		$id_warna = @$_POST['id_warna'];
		$id_ukuran = @$_POST['id_ukuran'];
		$stok = @$_POST['stok'];
		$keterangan = @$_POST['keterangan'];
		$edit_produk = @$_POST['update'];
		if($edit_produk){
			if ($id_kategori=="" || $id_jproduk=="" || $merk=="" || $id_warna =="" || $id_ukuran=="" || $stok=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "update produk set id_kategori = '$id_kategori' where id_produk = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update produk set id_jenis_produk = '$id_jproduk' where id_produk = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update produk set merk = '$merk' where id_produk = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update produk set id_warna = '$id_warna' where id_produk = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update produk set id_ukuran = '$id_ukuran' where id_produk = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update produk set stok = '$stok' where id_produk = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update produk set keterangan = '$keterangan' where id_produk = '$NL'") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Update Data Produk Berhasil");
					window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=produk");
				</script>
				<?php
			}
		}
	?>
</fieldset><a href="index.php"></a>