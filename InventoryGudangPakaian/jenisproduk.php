<h1 align="center"; style="font-size: 20px;">Halaman Jenis Produk</h1>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Tambah Data Jenis Produk</h2>
<fieldset>
	<legend>Tambah Jenis Produk</legend>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Jenis Produk</td>
				<td>:</td>
				<td><input type="int" name="id_jenis_produk"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><input type="text" name="jenis"></td>
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
		$id_jenis_produk = @$_POST['id_jenis_produk'];
		$jenis = @$_POST['jenis'];
		$tambah_jp = @$_POST['tambah'];
		if($tambah_jp){
			if ($id_jenis_produk=="" || $jenis=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "insert into jenis_produk values('$id_jenis_produk', '$jenis')") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Tambah Data Jenis Produk Berhasil");
				</script>
				<?php
			}
		}
	?>
</fieldset>
<br>
<br>
<br> 
<h2 style="font-family: Footlight MT Light; font-size:18px">Lihat Data Jenis Layanan</h2>
<fieldset>
	<legend>Tampilan Lihat Data</legend>
	<table width="80%" border="1px" style= "border-collapse: collapse;">
		<tr style="background-color: #fc0;">
			<th>Id Jenis Produk</th>
			<th>Jenis</th>
			<th>Opsi</th>
		</tr>
		<?php
			include "koneksi.php";
			$no=1;
			$sql= mysqli_query($koneksi, "select * from jenis_produk");
			while($data= mysqli_fetch_array($sql)){
		?>
		<tr align="center">
			<td><?php echo $data['id_jenis_produk']; ?></td>
			<td><?php echo $data['jenis']; ?></td>
			<td><a href="editjenisproduk.php? id_jenis_produk=<?php echo $data['id_jenis_produk'];?>"><button>Edit</button></a>
				<a href="hapusjenisproduk.php? id_jenis_produk=<?php echo $data['id_jenis_produk'];?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</fieldset>
