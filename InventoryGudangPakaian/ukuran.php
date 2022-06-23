<h1 align="center"; style="font-size: 20px;">Halaman Ukuran Pakaian</h1>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Tambah Data Ukuran</h2>
<fieldset>
	<legend>Tambah Ukuran</legend>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Ukuran</td>
				<td>:</td>
				<td><input type="int" name="id_ukuran"></td>
			</tr>
			<tr>
				<td>Tipe Ukuran</td>
				<td>:</td>
				<td><input type="text" name="tipe_ukuran"></td>
			</tr>
			<tr>
				<td>Ukuran</td>
				<td>:</td>
				<td><input type="text" name="ukuran"></td>
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
		$id_ukuran = @$_POST['id_ukuran'];
		$tipe_ukuran = @$_POST['tipe_ukuran'];
		$ukuran = @$_POST['ukuran'];
		$tambah_ukuran = @$_POST['tambah'];
		if($tambah_ukuran){
			if ($id_ukuran=="" || $tipe_ukuran=="" || $ukuran=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "insert into ukuran values('$id_ukuran', '$tipe_ukuran', '$ukuran')") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Tambah Data Ukuran Baju Berhasil");
				</script>
				<?php
			}
		}
	?>
</fieldset>

<br>
<br>
<br> 
<h2 style="font-family: Footlight MT Light; font-size:18px">Lihat Data Ukuran</h2>
<fieldset>
	<legend>Tampilan Lihat Data</legend>
	<table width="100%" border="1px" style= "border-collapse: collapse;">
		<tr style="background-color: #fc0;">
			<th>Id Ukuran</th>
			<th>Tipe Ukuran</th>
			<th>Ukuran</th>
			<th>Opsi</th>
		</tr>
		<?php
			include "koneksi.php";
			$no=1;
			$sql= mysqli_query($koneksi, "select * from ukuran");
			while($data= mysqli_fetch_array($sql)){
		?>
		<tr align="center">
			<td><?php echo $data['id_ukuran']; ?></td>
			<td><?php echo $data['tipe_ukuran']; ?></td>
			<td><?php echo $data['ukuran']; ?></td>
			<td><a href="editukuran.php? id_ukuran=<?php echo $data['id_ukuran'];?>"><button>Edit</button></a>
				<a href="hapusukuran.php? id_ukuran=<?php echo $data['id_ukuran'];?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</fieldset>
