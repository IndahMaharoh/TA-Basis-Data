<?php
	include "koneksi.php";
	$NL =$_GET['id_ukuran'];
	mysqli_query($koneksi,"delete from ukuran where id_ukuran ='$NL'") or die(mysql_error());
?>
<script type="text/javascript">
	alert("Hapus Data Ukuran Berhasil");
	window.location.replace("http://localhost/InventoryGudangPakaian/index.php?page=ukuran");
</script>