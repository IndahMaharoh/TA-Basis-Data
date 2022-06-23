<br>
<br>
<h1 align="center"; style="font-size: 20px;">Halaman Warna Pakaian</h1>
<br>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Update Data Warna</h2>
<?php
	include "koneksi.php";
	$NL=@$_GET['id_warna'];
	$sql = mysqli_query($koneksi, "select * from warna where id_warna = '$NL' ") or die(mysql_error());
	$data=mysqli_fetch_array($sql);
?>
<fieldset>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Warna</td>
				<td>:</td>
				<td><input type="text" name="id_warna" value="<?php echo $data['id_warna'];?>"  disabled="disabled"></td>
			</tr>
			<tr>
				<td>Warna</td>
				<td>:</td>
				<td><input type="text" name="warna" value="<?php echo $data['warna'];?>"></td>
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
		$warna = @$_POST['warna'];
		$edit_warna = @$_POST['update'];
		if($edit_warna){
			if ($warna=="" ) {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "update warna set warna = '$warna' where id_warna = '$NL'") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Update Data Warna Berhasil");
					window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=warna");
				</script>
				<?php
			}
		}
	?>
</fieldset>