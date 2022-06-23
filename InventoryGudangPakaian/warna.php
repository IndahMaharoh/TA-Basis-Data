<h1 align="center"; style="font-size: 20px;">Halaman Warna Pakaian</h1>
<h2 style="font-family: Footlight MT Light; font-size: 18px;">Tambah Data Warna Pakaian</h2>
<fieldset>
	<legend>Tambah  Warna Pakaian</legend>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id Warna</td>
				<td>:</td>
				<td><input type="int" name="id_warna"></td>
			</tr>
			<tr>
				<td>Warna</td>
				<td>:</td>
				<td><input type="text" name="warna"></td>
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
		$id_warna = @$_POST['id_warna'];
		$warna = @$_POST['warna'];
		$tambah_warna = @$_POST['tambah'];
		if($tambah_warna){
			if ($id_warna=="" || $warna=="") {
				?>
				<script type="text/javascript">
					alert("Inputan Tidak Boleh Ada yang Kosong");
				</script>
				<?php
			} else{
				mysqli_query($koneksi, "insert into warna values('$id_warna', '$warna')") or die(mysql_error());
				?>
				<script type="text/javascript">
					alert("Tambah Data Warna Pakaian Berhasil");
				</script>
				<?php
			}
		}
	?>
</fieldset>

<br>
<br>
<br> 
<h2 style="font-family: Footlight MT Light; font-size:18px">Lihat Data Warna Pakaian</h2>
<fieldset>
	<legend>Tampilan Lihat Data</legend>
	<table width="100%" border="1px" style= "border-collapse: collapse;">
		<tr style="background-color: #fc0;">
			<th>Id Warna</th>
			<th>Warna</th>
			<th>Opsi</th>
		</tr>
		<?php
			include "koneksi.php";
			$no=1;
			$sql= mysqli_query($koneksi, "select * from warna order by id_warna asc");
			while($data= mysqli_fetch_array($sql)){
		?>
		<tr align="center">
			<td><?php echo $data['id_warna']; ?></td>
			<td><?php echo $data['warna']; ?></td>
			<td><a href="editwarna.php? id_warna=<?php echo $data['id_warna'];?>"><button>Edit</button></a>
				<a href="hapuswarna.php? id_warna=<?php echo $data['id_warna'];?>"><button>Hapus</button></a>
			</td>
		</tr>
		<?php
		}
	?>
	</table>
</fieldset>