<h1 align="center"; style="font-size: 20px;">Halaman Kategori Barang</h1>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Tambah Data Kategori</h2>
<fieldset>
	<legend>Tambah Kategori Barang</legend>
	<form action="" method="post">
		<table>
			<tr>
				<td>Ide Kategori</td>
				<td>:</td>
				<td><input type="int" name="id_kategori"></td>
			</tr>
			<tr>
				<td>Jenis Kategori</td>
				<td>:</td>
				<td><input type="text" name="jenis_kategori"></td>
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
		$id_kategori = @$_POST['id_kategori'];
		$jenis_kategori = @$_POST['jenis_kategori'];
		$tambah_kategori=@$_POST['tambah'];
		if($tambah_kategori){
			if ($id_kategori=="" || $jenis_kategori=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "insert into kategori values('$id_kategori', '$jenis_kategori')") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Tambah Data Kategori Berhasil");
				</script>
				<?php
			}
		}
	?>
</fieldset>

<br>
<br>
<br> 
<h2 style="font-family: Footlight MT Light; font-size:18px">Lihat Data Barang</h2>
<fieldset>
	<legend>Tampilan Lihat Data</legend>
	<table width="80%" border="1px" style= "border-collapse: collapse;">
		<tr style="background-color: #fc0;">
			<th>Id Kategori</th>
			<th>Jenis Kategori</th>
			<th>Opsi</th>
		</tr>
		<?php
			include "koneksi.php";
			$no=1;
			$sql= mysqli_query($koneksi, "select * from kategori");
			while($data= mysqli_fetch_array($sql)){
		?>
		<tr align="center">
			<td><?php echo $data['id_kategori']; ?></td>
			<td><?php echo $data['jenis_kategori']; ?></td>
			<td><a href="editkategori.php? id_kategori=<?php echo $data['id_kategori'];?>"><button>Edit</button></a>
				<a href="hapuskategori.php? id_kategori=<?php echo $data['id_kategori'];?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</fieldset>
