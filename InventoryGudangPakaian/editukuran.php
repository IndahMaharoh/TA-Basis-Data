<br>
<br>
<h1 align="center"; style="font-size: 20px;">Halaman Ukuran Pakaian</h1>
<br>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Update Data Ukuran</h2>
<?php
	include "koneksi.php";
	$NL=@$_GET['id_ukuran'];
	$sql = mysqli_query($koneksi, "select * from ukuran where id_ukuran = '$NL' ") or die(mysql_error());
	$data=mysqli_fetch_array($sql);
?>
<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Ukuran</td>
				<td>:</td>
				<td><input type="int" name="id_ukuran" value="<?php echo $data['id_ukuran'];?>" disabled="disabled"></td>
			</tr>
			<tr>
				<td>Tipe Ukuran</td>
				<td>:</td>
				<td><input type="text" name="tipe_ukuran" value="<?php echo $data['tipe_ukuran'];?>"></td>
			</tr>
			<tr>
				<td>Ukuran</td>
				<td>:</td>
				<td><input type="text" name="ukuran" value="<?php echo $data['ukuran'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="update" value="update"> <input type="reset" name="reset" value="Batal"></td>
			</tr>
		</table>
	</form>
	<?php
		include "koneksi.php";
		$tipe_ukuran = @$_POST['tipe_ukuran'];
		$ukuran = @$_POST['ukuran'];
		$edit_ukuran = @$_POST['update'];
		if($edit_ukuran){
			if ($tipe_ukuran=="" || $ukuran=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "update ukuran set tipe_ukuran = '$tipe_ukuran' where id_ukuran = '$NL'") or die(mysql_error());
				mysqli_query($koneksi, "update ukuran set ukuran = '$ukuran' where id_ukuran = '$NL'") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Update Data Ukuran Pakaian Berhasil");
					window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=ukuran");
				</script>
				<?php
			}
		}
	?>
</fieldset>