<h1 align="center"; style="font-size: 20px;">Halaman Rak</h1>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Tambah Data Rak</h2>
<fieldset>
	<legend>Tambah Rak</legend>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Rak</td>
				<td>:</td>
				<td><input type="int" name="id_rak"></td>
			</tr>
			<tr>
				<td>Id Produk</td>
				<td>:</td>
				<td><input type="int" name="id_produk"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td>:</td>
				<td><input type="text" name="lokasi"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"> <input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	
	<?php
		include "koneksi.php";
		$id_rak = @$_POST['id_rak'];
		$id_produk = @$_POST['id_produk'];
		$lokasi = @$_POST['lokasi'];
		$tambah_rak = @$_POST['tambah'];
		if($tambah_rak){
			if ($id_rak=="" || $id_produk=="" || $lokasi=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "insert into rak values('$id_rak', '$id_produk', '$lokasi')") or die(mysql_error());
			?>
				<script type="text/javascript">
					alert("Tambah Data Rak Berhasil");
				</script>
				<?php
			}
		}
	?>
</fieldset>

<br>
<br>
<br> 
<h2 style="font-family: Footlight MT Light; font-size:18px">Lihat Data Rak</h2>
<fieldset>
	<legend>Tampilan Lihat Data</legend>
	<table width="80%" border="1px" style= "border-collapse: collapse;">
		<tr style="background-color: #fc0;">
			<th>Id Rak</th>
			<th>Id Produk</th>
			<th>Lokasi</th>
			<th>Opsi</th>
		</tr>
		<?php
			include "koneksi.php";
			$no=1;
			$sql= mysqli_query($koneksi, "select * from rak");
			while($data= mysqli_fetch_array($sql)){
		?>
		<tr align="center">
			<td><?php echo $data['id_rak']; ?></td>
			<td><?php echo $data['id_produk']; ?></td>
			<td><?php echo $data['lokasi']; ?></td>
			<td><a href="editrak.php? id_rak=<?php echo $data['id_rak'];?>"><button>Edit</button></a>
				<a href="hapusrak.php? id_rak=<?php echo $data['id_rak'];?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</fieldset>
