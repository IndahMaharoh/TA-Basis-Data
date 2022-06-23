<h1 align="center"; style="font-size: 20px;">Halaman Produk</h1>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Tambah Data Produk</h2>
<fieldset>
	<legend>Tambah Produk</legend>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Produk</td>
				<td>:</td>
				<td><input type="int" name="id_produk"></td>
			</tr>
			<tr>
				<td>Id Kategori</td>
				<td>:</td>
				<td><input type="int" name="id_kategori"></td>
			</tr>
			<tr>
				<td>Id Warna</td>
				<td>:</td>
				<td><input type="int" name="id_warna"></td>
			</tr>
			<tr>
				<td>Id Jenis Produk</td>
				<td>:</td>
				<td><input type="int" name="id_jenis_produk"></td>
			</tr>
			<tr>
				<td>Id Ukuran</td>
				<td>:</td>
				<td><input type="int" name="id_ukuran"></td>
			</tr>
			<tr>
				<td>Merk</td>
				<td>:</td>
				<td><input type="text" name="merk"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="int" name="stok"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><input type="text" name="keterangan"></td>
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
		$id_produk = @$_POST['id_produk'];
		$id_kategori = @$_POST['id_kategori'];
		$id_warna = @$_POST['id_warna'];
		$id_jproduk = @$_POST['id_jenis_produk'];
		$id_ukuran = @$_POST['id_ukuran'];
		$merk = @$_POST['merk'];
		$stok = @$_POST['stok'];
		$keterangan = @$_POST['keterangan'];
		$tambah_produk = @$_POST['tambah'];
		if($tambah_produk){
			if ($id_produk=="" || $id_kategori=="" || $id_warna=="" || $id_jproduk=="" || $id_ukuran=="" || $merk=="" || $stok=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "insert into produk values('$id_produk', '$id_kategori', '$id_warna', '$id_jproduk', '$id_ukuran', '$merk', '$stok', '$keterangan')") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Tambah Data Produk Berhasil");
				</script>
				<?php
			}
		}
	?>
</fieldset>

<br>
<br>
<br> 
<h2 style="font-family: Footlight MT Light; font-size:18px">Lihat Data Produk</h2>
<fieldset>
	<legend>Tampilan Lihat Data</legend>
	<table width="100%" border="1px" style= "border-collapse: collapse;">
		<tr style="background-color: #fc0;">
			<th>Id Produk</th>
			<th>Kategori</th>
			<th>Jenis Produk</th>
			<th>Merk</th>
			<th>Warna</th>
			<th>Ukuran</th>
			<th>Stok</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
		<?php
			include "koneksi.php";
			$no=1;
			$sql= mysqli_query($koneksi, "select produk.id_produk, kategori.jenis_kategori, jenis_produk.jenis, produk.merk, ukuran.ukuran, warna.warna, produk.stok, produk.keterangan from produk left join jenis_produk on produk.id_jenis_produk = jenis_produk.id_jenis_produk left join kategori on kategori.id_kategori = produk.id_kategori left join warna on warna.id_warna = produk.id_warna left join ukuran on ukuran.id_ukuran = produk.id_ukuran");
			while($data= mysqli_fetch_array($sql)){
		?>
		<tr align="center">
			<td><?php echo $data['id_produk']; ?></td>
			<td><?php echo $data['jenis_kategori']; ?></td>
			<td><?php echo $data['jenis']; ?></td>
			<td><?php echo $data['merk']; ?></td>
			<td><?php echo $data['warna']; ?></td>
			<td><?php echo $data['ukuran']; ?></td>
			<td><?php echo $data['stok']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			<td><a href="editproduk.php? id_produk=<?php echo $data['id_produk'];?>"><button>Edit</button></a>
				<a href="hapusproduk.php? id_produk=<?php echo $data['id_produk'];?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php
		}
	?>
	</table>
</fieldset>